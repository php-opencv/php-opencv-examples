<?php

use CV\Scalar;
use function CV\{imread, cvtColor};

$categories = explode("\n", file_get_contents('models/mobilenet/classes.txt'));

$src = imread("images/cat.jpg"); // opencv loads image to matrix with BGR order
$src = cvtColor($src, CV\COLOR_BGR2RGB); // convert BGR to RGB
//var_export($src);

$blob = \CV\DNN\blobFromImage($src, 0.017, new \CV\Size(224,224), new Scalar(103.94, 116.78, 123.68)); // convert image to 4 dimensions matrix
//var_export($blob);

$net = \CV\DNN\readNetFromCaffe('models/mobilenet/mobilenet_deploy.prototxt', 'models/mobilenet/mobilenet.caffemodel');

$net->setInput($blob, "");

$r = $net->forward();
//var_export($r);

$maxConfidence = 0;
$confidences = [];
for ($i = 0; $i < 1000; $i++) {
    $confidences[$i] = intval($r->atIdx([0,$i,0,0], 1) * 100);
}

// top 5:
arsort($confidences);
$confidences = array_slice($confidences, 0, 5, true);

foreach ($confidences as $label => $confidence) {
    echo "$confidence%: {$categories[$label]}\n";
}
