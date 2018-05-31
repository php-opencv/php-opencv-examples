<?php

use CV\Face\LBPHFaceRecognizer, CV\CascadeClassifier;
use function CV\{imread, cvtColor, equalizeHist};
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

if ($faces) {
    $faceRecognizer = LBPHFaceRecognizer::create();

    //train
    foreach ($faces as $k => $face) {
        $mat = $gray->getImageROI($face);
        $faceRecognizer->update([$mat], [$k+1]);
    }

    //$faceRecognizer->write('results/lbph_model.xml');
    //$faceRecognizer->read('results/lbph_model.xml');

    // test image
    $src = imread("images/2.jpg");
    $gray = cvtColor($src, COLOR_BGR2GRAY);
    equalizeHist($gray, $gray);
    $faceClassifier->detectMultiScale($gray, $faces);
    $mat = $gray->getImageROI($faces[0]);

    //predict
    $faceLabel = $faceRecognizer->predict($gray, $faceConfidence);
    echo "{$faceLabel}, {$faceConfidence}\n";
}
