<?php

use CV\CascadeClassifier, CV\Face\FacemarkLBF;
use function CV\{circle, imread, imwrite, cvtColor, equalizeHist};
use CV\Scalar;
use const CV\{COLOR_BGR2GRAY};

$src = imread("images/faces.jpg");
$gray = cvtColor($src, COLOR_BGR2GRAY);
equalizeHist($gray, $gray);

// face by lbpcascade_frontalface
$faceClassifier = new CascadeClassifier();
$faceClassifier->load('models/lbpcascades/lbpcascade_frontalface.xml');
$faces = null;
$faceClassifier->detectMultiScale($gray, $faces);
//var_export($faces);

$facemark = FacemarkLBF::create();
$facemark->loadModel('models/opencv-facemark-lbf/lbfmodel.yaml');

$facemark->fit($src, $faces, $landmarks);
//var_export($landmarks);
if ($landmarks) {
    $scalar = new Scalar(0, 0, 255);
    foreach ($landmarks as $face) {
        foreach($face as $k => $point) {//var_export($point);
            circle($src, $point, 2, $scalar, 2);
        }
    }
}


imwrite("results/_detect_facemarks_by_lbf.jpg", $src);