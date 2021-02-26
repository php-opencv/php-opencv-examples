<?php

use CV\Scalar, CV\Size;

$net = \CV\DNN\readNetFromONNX('models/centerface/centerface.onnx');

$src = \CV\imread("images/faces.jpg");

$img_w_new = ceil($src->cols / 32) * 32;
$img_h_new = ceil($src->rows / 32) * 32;

$scale_w = $img_w_new / $src->cols;
$scale_h = $img_h_new / $src->rows;
//var_export([$scale_w, $scale_h]);

$blob = \CV\DNN\blobFromImage($src, 1,  new Size($img_w_new, $img_h_new), new Scalar(), true, false);
$net->setInput($blob);

[$heatmapMat, $scaleMat, $offsetMat, $landmarksMat] = $net->forwardMulti(['537', '538', '539', '540']);

$thresh = 0.7;

$h = $heatmapMat->shape[2];
$w = $heatmapMat->shape[3];

$l = $landmarksMat->shape[1];

function landmarks($landmarksMat, $l, $i, $j, $x1, $y1, $s0, $s1) {
    $landmarks = [];
    for ($k = 0; $k < $l/2; $k++) {
        $landmarks[] = [$landmarksMat->atIdx([0,$k*2+1,$i,$j])*$s1+$x1, $landmarksMat->atIdx([0,$k*2+0,$i,$j])*$s0+$y1];
    }

    return $landmarks;
}

$faces = [];
for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        $confidence = $heatmapMat->atIdx([0,0,$i,$j]);
        if ($confidence > $thresh) {//var_export($heatmapMat->atIdx([0,0,$i,$j]));echo "\n";

            //var_export($scaleMat->atIdx([0,0,$i,$j]));echo "\n";
            //var_export([$i, $j]);
            $s0 = exp($scaleMat->atIdx([0,0,$i,$j])) * 4;
            $s1 = exp($scaleMat->atIdx([0,1,$i,$j])) * 4;
            $o0 = $offsetMat->atIdx([0,0,$i,$j]);
            $o1 = $offsetMat->atIdx([0,1,$i,$j]);
            $x1 = max(0, ($j + $o1 + 0.5) * 4 - $s1 / 2);
            $y1 = max(0, ($i + $o0 + 0.5) * 4 - $s0 / 2);
            $x1 = min($x1, $src->cols);
            $y1 = min($y1, $src->rows);
            $x2 = $x1 + $s1;
            $y2 = $y1 + $s0;

            if ($faces) { // checking for intersection
                foreach ($faces as $id => [$existX1, $existY1, $existX2, $existY2, $existConf]) {
                    if ($existX1 < $x2 && $existY1 < $y2 && $existX2 > $x1 && $existY2 > $y1) {
                        if ($confidence > $existConf) {//echo 1;
                            $faces[$id] = [$x1, $y1, $x2, $y2, $confidence, landmarks($landmarksMat, $l, $i, $j, $x1, $y1, $s0, $s1)];
                        }
                        continue 2;
                    }
                }
            }

            $faces[]= [$x1, $y1, $x2, $y2, $confidence, landmarks($landmarksMat, $l, $i, $j, $x1, $y1, $s0, $s1)];
        }
    }
}

//var_export($faces);

$color = new Scalar(0, 0, 255);
foreach ($faces as [$x1, $y1, $x2, $y2, $conf, $landmarks]) {
    foreach ($landmarks as $point) {
        $point = new \CV\Point($point[0]/$scale_w, $point[1]/$scale_h);
        \CV\circle($src, $point, 2, $color, 2);
        \CV\rectangle($src, $x1/$scale_w, $y1/$scale_h, $x2/$scale_w, $y2/$scale_h, $color, 2);
    }
}

$faces = [];
$scalar = new Scalar(0, 0, 255);


\CV\imwrite("results/_detect_facemarks_by_dnn_centerface.jpg", $src);
