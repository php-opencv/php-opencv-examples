<?php

use CV\Scalar, CV\Size;
use function CV\{imread, imwrite, rectangle};

$netDet = \CV\DNN\readNetFromCaffe('models/ssd/res10_300x300_ssd_deploy.prototxt', 'models/ssd/res10_300x300_ssd_iter_140000.caffemodel');
$netRecogn = \CV\DNN\readNetFromTorch('models/openface/openface.nn4.small2.v1.t7');

$image2faces = function ($src) use ($netDet) {
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

    for ($i = 0; $i < $r->shape[2]; $i++) {
        $confidence = $r->atIdx([0,0,$i,2]);
        if ($confidence > 0.9) {
            //var_export($confidence);echo "\n";
            $startX = $r->atIdx([0,0,$i,3]) * $src->cols;
            $startY = $r->atIdx([0,0,$i,4]) * $src->rows;
            $endX = $r->atIdx([0,0,$i,5]) * $src->cols;
            $endY = $r->atIdx([0,0,$i,6]) * $src->rows;

            $faces[] = $src->getImageROI(new \CV\Rect($startX, $startY, $endX - $startX, $endY - $startY));
        }
    }

    return $faces;
};

$face2vec = function ($face) use ($netRecogn) {
    $blob = \CV\DNN\blobFromImage($face, 1.0 / 255, new Size(96, 96), new Scalar(), true, false);
    $netRecogn->setInput($blob);
    return $netRecogn->forward();
};

function faceDistance($face1, $face2) {
    $distance = 0;
    foreach ($face1 as $i => $v) {
        $distance += ($face1[$i] - $face2[$i])**2;
    }
    return sqrt($distance);
}

$src = imread("images/faces.jpg");

$faces = $image2faces($src);

$faceVectors = [];
foreach ($faces as $i => $face) {
    $vec = $face2vec($face);
    //imwrite("results/_face.jpg", $face);

    //$vec->print();
    //var_export($vec->data());
    $faceVectors["me$i"] = $vec->data();
}

$src = imread("images/angelina_faces.png");

$faces = $image2faces($src);

foreach ($faces as $i => $face) {
    $vec = $face2vec($face);
    //imwrite("results/_face.jpg", $face);

    //$vec->print();
    //var_export($vec->data());
    $faceVectors["angelina$i"] = $vec->data();
}

//var_export($faceVectors);

$src = imread("images/angelina_and_me.png");

$faces = $image2faces($src);

foreach ($faces as $i => $face) {
    $vec = $face2vec($face);
    $minDistance = 0;
    $faceLabel = '';
    foreach ($faceVectors as $label => $faceVector) {
        $distance = faceDistance($vec->data(), $faceVector);

        if (!$minDistance || $distance < $minDistance) {
            $minDistance = $distance;
            $faceLabel = $label;
        }
    }

    echo "face$i $faceLabel $minDistance\n";
}
