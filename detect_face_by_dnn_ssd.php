<?php

use CV\Scalar, CV\Size;
use function CV\{imread, imwrite, cvtColor, equalizeHist, rectangle};
use const CV\{COLOR_BGR2GRAY};


$src = imread("images/faces.jpg");
$gray = cvtColor($src, COLOR_BGR2GRAY);
equalizeHist($gray, $gray);

\CV\resize($src, $resised, new Size(300, 300));

$blob = \CV\DNN\Net::blobFromImage($resised, 1, new Size(300, 300), new Scalar(104, 177, 123));

$net = \CV\DNN\Net::readNetFromCaffe('models/ssd/res10_300x300_ssd_deploy.prototxt', 'models/ssd/res10_300x300_ssd_iter_140000.caffemodel');

$net->setInput($blob, "");

$r = $net->forward();

$scalar = new Scalar(0, 0, 255);
for ($i = 0; $i < $r->shape[2]; $i++) {
    $confidence = $r->atIdx([0,0,$i,2], 1);
    //var_export($confidence);echo "\n";
    if ($confidence > 0.5) {
        rectangle($src, $r->atIdx([0,0,$i,3], 1)*$src->cols, $r->atIdx([0,0,$i,4], 1)*$src->rows, $r->atIdx([0,0,$i,5], 1)*$src->cols, $r->atIdx([0,0,$i,6], 1)*$src->rows, $scalar, 3);
    }
}


$data = [];

imwrite("results/_detect_face_by_dnn_ssd.jpg", $src);
