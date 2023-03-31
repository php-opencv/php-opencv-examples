<?php

use CV\Scalar;
use function CV\{imread, imwrite, rectangle};

$src = imread("images/faces.jpg");
$scalar = new Scalar(0, 0, 255);

$netDet = CV\FaceDetectorYN::create('models/opencv_zoo/face_detection_yunet_2022mar.onnx', '', $src->size());
$netRecogn = CV\FaceRecognizerSF::create('models/opencv_zoo/face_recognition_sface_2021dec.onnx', '');

$r = $netDet->detect($src);

$features = [];
for ($i = 0; $i < $r->rows; $i++) {
    $confidence = $r->atIdx([$i,14]);
    var_export($confidence);echo "\n";

    if ($confidence > 0.9) {
        $startX = $r->atIdx([$i,0]);
        $startY = $r->atIdx([$i,1]);
        $w = $r->atIdx([$i,2]);
        $h = $r->atIdx([$i,3]);

        var_export([$startX, $startY, $startX + $w, $startY + $h]);echo "\n";
        //rectangle($src, $startX, $startY, $startX + $w, $startY + $h, $scalar, 3);

        //$faces[] = $src->getImageROI(new \CV\Rect($startX, $startY, $w, $h));

        $faceBox = $r->row($i);

        //$face = $netRecogn->alignCrop($r, $faceBox); // todo: doesn't work. needs fix
        //imwrite("results/_recognize_face_by_facerecognizersf$i.jpg", $face);

        $face = $src->getImageROI(new \CV\Rect($startX, $startY, $w, $h));

        $feature = $netRecogn->feature($face);

        var_export($feature);
        var_export($feature->data());
        $features[] = $feature;
    }
}

foreach ($features as $i => $feature) {
    foreach ($features as $j => $feature2) {
        if ($i == $j) {
            continue;
        }

        $similarity = $netRecogn->match($feature, $feature2);
        var_export($similarity);echo "\n";
    }
}