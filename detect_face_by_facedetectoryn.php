<?php

use CV\Scalar;
use function CV\{imread, imwrite, rectangle};

$src = imread("images/faces.jpg");
$scalar = new Scalar(0, 0, 255);

$netDet = CV\FaceDetectorYN::create('models/opencv_zoo/face_detection_yunet_2022mar.onnx', '', $src->size());

$r = $netDet->detect($src);

$faces = [];
for ($i = 0; $i < $r->rows; $i++) {
    $confidence = $r->atIdx([$i,14]);
    var_export($confidence);echo "\n";

    if ($confidence > 0.9) {
        $startX = $r->atIdx([$i,0]);
        $startY = $r->atIdx([$i,1]);
        $w = $r->atIdx([$i,2]);
        $h = $r->atIdx([$i,3]);

        var_export([$startX, $startY, $startX + $w, $startY + $h]);echo "\n";
        rectangle($src, $startX, $startY, $startX + $w, $startY + $h, $scalar, 3);
    }
}

imwrite("results/_detect_face_by_facedetectoryn.jpg", $src);
