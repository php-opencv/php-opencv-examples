<?php

/**
 * This file is helper for autocomplete and highlighting in PhpStorm and another IDEs
 * @author: morozovsk
 * @link: https://github.com/morozovsk
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace CV;

/**
 * Class Mat
 * @package CV
 */
class Mat {
    /**
     * @var
     */
    public $rows;
    /**
     * @var
     */
    public $cols;
    /**
     * @var
     */
    public $type;
    /**
     * @var
     */
    public $dims;

    /**
     * Mat constructor.
     * @param int $rows
     * @param int $cols
     * @param int $type
     * @param Scalar|null $scalar
     */
    function __construct(int $rows = 0, int $cols = 0, int $type = 0, Scalar $scalar = null) {

    }

    /**
     * @return null
     */
    public function print() {
        return null;
    }

    /**
     * @return int
     */
    public function type() {

    }

    /**
     * @return int
     */
    public function depth() {

    }

    /**
     * @return int
     */
    public function channels() {

    }

    /**
     * @return int
     */
    public function empty() {

    }

    /**
     * @param int $rows
     * @param int $cols
     * @param int $flags
     * @return Mat|null
     */
    public function ones(int $rows, int $cols, int $flags) {

    }

    /**
     * @param int $rows
     * @param int $cols
     * @param int $flags
     * @return Mat|null
     */
    public function zeros(int $rows, int $cols, int $flags) {

    }

    /**
     * @param Size $size
     * @param int $flags
     * @return Mat|null
     */
    public function zeros_by_size(Size $size, int $flags) {

    }

    /**
     * @return Mat
     */
    public function clone() {

    }

    /**
     * @return bool
     */
    public function is_continuous() {

    }

    /**
     * @return bool
     */
    public function is_submatrix() {

    }

    /**
     * @param $y
     * @return Mat|null
     */
    public function row($y) {

    }

    /**
     * @param $y
     * @return Mat|null
     */
    public function col($x) {

    }

    /**
     * @param array $rect
     * @return Mat $mat
     */
    public function getImageROI(Rect $rect) {

    }

    /**
     * @param Mat $mat
     * @param Mat|null $to
     * @return null
     */
    public function copy_to(Mat $mat, Mat $to = null) {
        return null;
    }

    /**
     * @param int $row
     * @param int $col
     * @param int $channel
     * @param null $value
     * @return int|null
     */
    public function at(int $row, int $col, int $channel, $value = null) {

    }

    /**
     * @param array $idx
     * @param int $channel
     * @param null $value
     * @return int|null
     */
    public function atIdx(array $idx, int $channel, $value = null) {

    }

    /**
     * @param Mat $dst
     * @param int $rtype
     * @param float|null $alpha
     * @param float|null $beta
     * @return null
     */
    public function convertTo(Mat &$dst, int $rtype, float $alpha = null, float $beta = null) {
        return null;
    }

    /**
     * @return Size
     */
    public function size() {
        return new Size($this->cols, $this->rows);
    }

    /**
     * @param int $number
     * @return Mat|null
     */
    public function plus(int $number) {

    }

    /**
     * @param int $number
     * @return Mat|null
     */
    public function divide(int $number) {

    }

    /**
     * @param Mat $value1
     * @param Mat $value2
     * @return Mat|null $mat
     */
    public function add(Mat $value1, Mat $value2) {

    }

    /**
     * @param Mat $value1
     * @param Mat $value2
     * @return Mat|null $mat
     */
    public function subtract(Mat $value1, Mat $value2) {

    }
}

/**
 * Class Rect
 * @package CV
 */
class Rect {
    /**
     * @var
     */
    public $x;
    /**
     * @var
     */
    public $y;
    /**
     * @var
     */
    public $width;
    /**
     * @var
     */
    public $height;

    /**
     * Rect constructor.
     * @param int $x
     * @param int $y
     * @param int $width
     * @param int $height
     */
    function __construct(int $x = 0, int $y = 0, int $width = 0, int $height = 0)
    {

    }

    /**
     * @return Point
     */
    public function tl() {
        return new Point($this->x, $this->y);
    }

    /**
     * @return Point
     */
    public function br() {
        return new Point($this->x + $this->width, $this->y + $this->height);
    }

    /**
     * @return Size
     */
    public function size() {
        return new Size($this->width, $this->height);
    }

    /**
     * @return float|int
     */
    public function area() {
        return $this->width * $this->height;
    }

    /**
     * @return null
     */
    public function print() {
        return null;
    }
}

/*class RotatedRect {
    function __construct(Point $center = null, Size $size = null, float $angle = 0.0)
    {

    }
}*/

/**
 * Class Rect
 * @package CV
 */
class Point {
    /**
     * @var
     */
    public $x;
    /**
     * @var
     */
    public $y;

    function __construct(int $x = 0, int $y = 0) {

    }
    /**
     * @return null
     */
    public function print() {
        return null;
    }
}

/**
 * Class Scalar
 * @package CV
 */
class Scalar {
    /**
     * Scalar constructor.
     * @param int $value1
     * @param int $value2
     * @param int $value3
     * @param int $value4
     */
    function __construct(int $value1 = 0, int $value2 = 0, int $value3 = 0, int $value4 = 0)
    {

    }

    /**
     * @return null
     */
    public function print() {
        return null;
    }
}

/**
 * Class Size
 * @package CV
 */
class Size {
    /**
     * @var
     */
    public $width;
    /**
     * @var
     */
    public $height;

    /**
     * Size constructor.
     * @param int $width
     * @param int $height
     */
    function __construct($width = 0, $height = 0)
    {

    }

    /**
     * @return null
     */
    public function print() {
        return null;
    }
}


/**
 * Class CascadeClassifier
 * @package CV
 */
class CascadeClassifier {
    /**
     * @param string $filename
     */
    public function load(string $filename) {

    }

    /**
     * @param Mat $mat
     * @param array $objects
     * @param float $scale_factor
     * @param int $min_neighbors
     * @param int $flags
     * @param Size|null $minSize
     * @param Size|null $maxSize
     * @return null
     */
    public function detectMultiScale(Mat $mat, array &$rects, float $scale_factor = 1.1, int $min_neighbors = 3, int $flags = 0, Size $minSize = null, Size $maxSize = null) {
        return null;
    }
}

/**
 * @param string $filename
 * @param null $flags
 * @return Mat|null
 */
function imread(string $filename, $flags = null) {

}

/**
 * @param string $filename
 * @param Mat $mat
 * @return true|null
 */
function imwrite(string $filename, Mat $mat) {

}

/**
 * @param Mat $mat
 * @param $code
 * @return Mat|null
 */
function cvtColor(Mat $mat, $code, $dstCn = null) {

}

/**
 * @param Mat $mat
 * @param Point $startPoint
 * @param Point $endPoint
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function line(Mat $mat, Point $startPoint, Point $endPoint, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param Point $point
 * @param int $radius
 * @param Scalar $color
 * @param null $thickness
 * @param int $lineType
 * @param int $shift
 * @return null
 */
function circle(Mat $mat, Point $point, int $radius, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param Point $point
 * @param Size $size
 * @param int $angle
 * @param int $startAngle
 * @param int $endAngle
 * @param Scalar $color
 * @param int $thickness
 * @param int $lineType
 * @param int $shift
 * @return null
 */
function ellipse(Mat $mat, Point $point, Size $size, int $angle, int $startAngle, int $endAngle, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param int $startX
 * @param int $startY
 * @param int $endX
 * @param int $endY
 * @param Scalar $color
 * @param int $thickness
 * @param int $lineType
 * @param int $shift
 * @return null
 */
function rectangle(Mat $mat, int $startX, int $startY, int $endX, int $endY, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param Point $startPoint
 * @param Point $endPoint
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function rectangleByPoint(Mat $mat, Point $startPoint, Point $endPoint, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param Rect $rect
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function rectangleByRect(Mat $mat, Rect $rect, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $mat
 * @param string $text
 * @param Point $point
 * @param int $fontFace
 * @param float $fontScale
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param bool $bottomLeftOrigin
 * @return null
 */
function putText(Mat $mat, string $text, Point $point, int $fontFace, float $fontScale, Scalar $color, int $thickness = 1, int $lineType = null, bool $bottomLeftOrigin = false) {
    return null;
}

/**
 * @param Mat $mat
 * @param Mat $dst
 * @return null
 */
function equalizeHist(Mat $mat, Mat &$dst) {
    return null;
}

/**
 * @param Mat $mat
 * @param Mat $dst
 * @param Size $size
 * @param float $fx
 * @param float $fy
 * @param int $interpolation
 * @return null
 */
function resize(Mat $mat, Mat &$dst, Size $size, float $fx = 0, float $fy = 0, int $interpolation = 1) {
    return null;
}

/**
 * @param Mat $mat
 * @param Mat $dst
 * @param float $thresh
 * @param float $maxval
 * @param int $type
 * @return float
 */
function threshold(Mat $mat, Mat &$dst, float $thresh, float $maxval, int $type) {

}

/**
 * @param Mat $mat
 * @return array
 */
function split(Mat $mat) {
    return [];
}

/**
 * @param array $channels
 * @param Mat $dst
 * @return null
 */
function merge(array $channels, Mat &$dst) {
    return null;
}

function createTrackbar() {}
function destroyWindow() {}
function getOptimalDFTSize() {}
function getTrackBarPos() {}
function getTickCount() {}
function getTickFrequency() {}
function setMouseCallback() {}
function boundingRect() {}

function CV_8UC(int $num) {}
function CV_8SC(int $num) {}
function CV_16UC(int $num) {}
function CV_16SC(int $num) {}
function CV_32SC(int $num) {}
function CV_32FC(int $num) {}
function CV_64FC(int $num) {}

function imshow() {}
function waitKey() {}
function moveWindow() {}
function namedWindow() {}

function fillPoly() {}
function addWeighted() {}
function copyMakeBorder() {}
function dft() {}
function magnitude() {}
function add() {}
function log() {}
function normalize() {}
function absdiff() {}
function blur() {}
function GaussianBlur() {}
function medianBlur() {}
function bilateralFilter() {}
function dilate() {}
function erode() {}
function filter2D() {}
function Sobel() {}
function Scharr() {}
function Laplacian() {}
function convertScaleAbs() {}
function getStructuringElement() {}
function morphologyEx() {}
function LUT() {}
function floodFill() {}
function adaptiveThreshold() {}
function findContoursWithoutHierarchy() {}
function drawContours() {}

define('CV\COLOR_BGR2GRAY', 6);
define('CV\COLOR_RGB2GRAY', 7);

namespace CV\Face;
use CV\Mat;


/**
 * Class LBPHFaceRecognizer
 * @package CV\Face
 */
class LBPHFaceRecognizer {
    /**
     * @return LBPHFaceRecognizer
     */
    public static function create() {
        return new self();
    }

    /**
     * @param array $mats
     * @param array $labels
     * @return null
     */
    public function train(array $mats, array $labels) {
        return null;
    }

    /**
     * @param Mat $mat
     * @param float $confidence
     * @return int $label
     */
    public function predict(\CV\Mat $mat, float &$confidence) {
        return $label = 1;
    }
}

/**
 * Class FacemarkLBF
 * @package CV\Face
 */
class FacemarkLBF {
    /**
     * @return FacemarkLBF
     */
    public static function create() {
        return new self();
    }

    /**
     * @param string $filename
     * @return null
     */
    public function loadModel(string $filename) {
        return null;
    }

    /**
     * @param Mat $mat
     * @param array $faces
     * @param array $landmarks
     * @return null
     */
    public function fit(Mat $mat, array $faces, array &$landmarks) {
        return null;
    }
}

namespace CV\Dnn;
use CV\Mat;
use CV\Scalar;
use CV\Size;

class Net {
    public static function blobFromImage(Mat $image, float $scalefactor = 1.0, Size $size = null, Scalar $mean = null, $swapRB = true, $crop = true) {
        return new Mat();
    }

    /**
     * @param string $filename
     * @return Net
     */
    public static function readNetFromTorch(string $filename) {

    }

    /**
     * @param string $protoFilename
     * @param string $modelFilename
     * @return Net
     */
    public static function readNetFromCaffe(string $protoFilename, $modelFilename) {

    }

    /**
     * @param Mat $blob
     * @param string $name
     * @return null
     */
    public function setInput(Mat $blob, string $name) {
        return null;
    }

    /**
     * @return Mat
     */
    public function forward() {

    }
}