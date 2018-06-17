<?php

use CV\CascadeClassifier, CV\Scalar;
use function CV\{imread, imwrite, cvtColor, equalizeHist, rectangleByRect};
use const CV\{COLOR_BGR2GRAY};


$src = imread("images/faces.jpg");
$gray = cvtColor($src, COLOR_BGR2GRAY);

// face by lbpcascade_frontalface
$faceClassifier = new CascadeClassifier();
$faceClassifier->load('models/lbpcascades/lbpcascade_frontalface.xml');

$faceClassifier->detectMultiScale($gray, $faces);
//var_export($faces);

if ($faces) {
    $scalar = new Scalar(0, 0, 255); //blue

    foreach ($faces as $face) {
        rectangleByRect($src, $face, $scalar, 3);
    }
}

// eyes by haarcascade_eye
/*$eyeClassifier = new CascadeClassifier();
$eyeClassifier->load('models/haarcascades/haarcascade_eye.xml');
$eyes = null;
$eyeClassifier->detectMultiScale($gray, $eyes);
var_export($eyes);

if ($eyes) {
    $scalar = new Scalar(0, 0, 255); //red

    foreach ($eyes as $eye) {
        rectangle($src, $eye->x, $eye->y, $eye->x + $eye->width, $eye->y + $eye->height, $scalar, 2);
    }
}*/


imwrite("results/_detect_face_by_cascade_classifier.jpg", $src);
