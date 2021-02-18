<?php

use CV\Scalar, CV\Size;
use function CV\{imread, imwrite, cvtColor, circle};

$netDet = \CV\DNN\readNetFromCaffe('models/ssd/res10_300x300_ssd_deploy.prototxt', 'models/ssd/res10_300x300_ssd_iter_140000.caffemodel');
$netRecogn = \CV\DNN\readNetFromCaffe('models/VanFace/VanFace.prototxt', 'models/VanFace/VanFace.caffemodel');

$src = imread("images/faces.jpg");
$size = $src->size(); // 2000x500

$minSide = min($size->width, $size->height);
$divider = $minSide / 300;
\CV\resize($src, $resized, new Size($size->width / $divider, $size->height / $divider)); // 1200x300

//var_export($resized);

$blob = \CV\DNN\blobFromImage($resized, 1, new Size(), new Scalar(104, 177, 123), true, false);

$netDet->setInput($blob);

$r = $netDet->forward();

//var_export($r->shape);

$faces = [];
$scalar = new Scalar(0, 0, 255);
for ($i = 0; $i < $r->shape[2]; $i++) {
    $confidence = $r->atIdx([0,0,$i,2]);
    if ($confidence > 0.9) {
        var_export($confidence);echo "\n";
        $startX = $r->atIdx([0,0,$i,3]) * $src->cols;
        $startY = $r->atIdx([0,0,$i,4]) * $src->rows;
        $endX = $r->atIdx([0,0,$i,5]) * $src->cols;
        $endY = $r->atIdx([0,0,$i,6]) * $src->rows;

        $face = $src->getImageROI(new \CV\Rect($startX, $startY, $endX - $startX, $endY - $startY));
        \CV\resize($face, $resized, new Size(60,60));
        $resized = cvtColor($resized, \CV\COLOR_BGR2GRAY, 2);
        \CV\meanStdDev($resized, $mean, $sdv);

        $m = $mean->data()[0];
        $s = $sdv->data()[0];

        $blob = \CV\DNN\blobFromImage($resized, 1 / (0.000001 + $s),  new Size(60,60), new Scalar($m, $m, $m));
        $netRecogn->setInput($blob);
        //var_export($blob);die();
        $out = $netRecogn->forward();
        $data = $out->data();

        for ($j=0;$j<68;$j++) {
            $point = new \CV\Point($startX + $data[$j*2] * $face->cols, $startY + $data[$j*2+1] * $face->rows);
            circle($src, $point, 2, new Scalar(0, 0, 255), 2);
            //var_export($point);
        }
    }
}

imwrite("results/_detect_facemarks_by_dnn_vanface.jpg", $src);
