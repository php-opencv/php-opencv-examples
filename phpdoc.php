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
     * @var
     */
    public $shape;

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
     * @return Mat $image
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
     * @return int|float $value
     */
    public function atIdx(array $idx, int $channel = 1, $value = null) {

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
     * @param float $number
     * @return Mat|null
     */
    public function divide(float $number) {

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
     * @param Mat $image
     * @param array $objects
     * @param float $scale_factor
     * @param int $min_neighbors
     * @param int $flags
     * @param Size|null $minSize
     * @param Size|null $maxSize
     * @return null
     */
    public function detectMultiScale(Mat $image, array &$rects, float $scale_factor = 1.1, int $min_neighbors = 3, int $flags = 0, Size $minSize = null, Size $maxSize = null) {
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
 * @param Mat $image
 * @return true|null
 */
function imwrite(string $filename, Mat $image) {

}

/**
 * @param Mat $image
 * @param $code
 * @return Mat|null
 */
function cvtColor(Mat $image, $code, $dstCn = null) {

}

/**
 * @param Mat $image
 * @param Point $startPoint
 * @param Point $endPoint
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function line(Mat $image, Point $startPoint, Point $endPoint, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
 * @param Point $point
 * @param int $radius
 * @param Scalar $color
 * @param null $thickness
 * @param int $lineType
 * @param int $shift
 * @return null
 */
function circle(Mat $image, Point $point, int $radius, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
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
function ellipse(Mat $image, Point $point, Size $size, int $angle, int $startAngle, int $endAngle, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
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
function rectangle(Mat $image, int $startX, int $startY, int $endX, int $endY, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
 * @param Point $startPoint
 * @param Point $endPoint
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function rectangleByPoint(Mat $image, Point $startPoint, Point $endPoint, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
 * @param Rect $rect
 * @param Scalar $color
 * @param int $thickness
 * @param int|null $lineType
 * @param int $shift
 * @return null
 */
function rectangleByRect(Mat $image, Rect $rect, Scalar $color, int $thickness = 1, int $lineType = null, int $shift = 0) {
    return null;
}

/**
 * @param Mat $image
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
function putText(Mat $image, string $text, Point $point, int $fontFace, float $fontScale, Scalar $color, int $thickness = 1, int $lineType = null, bool $bottomLeftOrigin = false) {
    return null;
}

/**
 * @param Mat $image
 * @param Mat $dst
 * @return null
 */
function equalizeHist(Mat $image, Mat &$dst) {
    return null;
}

/**
 * @param Mat $image
 * @param Mat $dst
 * @param Size $size
 * @param float $fx
 * @param float $fy
 * @param int $interpolation
 * @return null
 */
function resize(Mat $image, Mat &$dst, Size $size, float $fx = 0, float $fy = 0, int $interpolation = 1) {
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

/**
 * @param Mat $mat
 * @param Mat $dst
 * @param int $top
 * @param int $bottom
 * @param int $left
 * @param int $right
 * @param int $borderType
 * @param Scalar|null $color
 * @return null
 */
function copyMakeBorder(Mat $mat, Mat &$dst, int $top, int $bottom, int $left, int $right, int $borderType, Scalar $color = null) {
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

define('CV\CV_8U', 0);
define('CV\CV_8S', 1);
define('CV\CV_16U', 2);
define('CV\CV_16S', 3);
define('CV\CV_32S', 4);
define('CV\CV_32F', 5);
define('CV\CV_64F', 6);

define('CV\CV_8UC1', 0);
define('CV\CV_8SC1', 1);
define('CV\CV_16UC1', 2);
define('CV\CV_16SC1', 3);
define('CV\CV_32SC1', 4);
define('CV\CV_32FC1', 5);
define('CV\CV_64FC1', 6);

define('CV\CV_8UC2', 8);
define('CV\CV_8SC2', 9);
define('CV\CV_16UC2', 10);
define('CV\CV_16SC2', 11);
define('CV\CV_32SC2', 12);
define('CV\CV_32FC2', 13);
define('CV\CV_64FC2', 14);

define('CV\CV_8UC3', 16);
define('CV\CV_8SC3', 17);
define('CV\CV_16UC3', 18);
define('CV\CV_16SC3', 19);
define('CV\CV_32SC3', 20);
define('CV\CV_32FC3', 21);
define('CV\CV_64FC3', 22);

define('CV\CV_8UC4', 24);
define('CV\CV_8SC4', 25);
define('CV\CV_16UC4', 26);
define('CV\CV_16SC4', 27);
define('CV\CV_32SC4', 28);
define('CV\CV_32FC4', 29);
define('CV\CV_64FC4', 30);

define('CV\COLOR_BGR2BGRA', 0);
define('CV\COLOR_RGB2RGBA', 0);
define('CV\COLOR_BGRA2BGR', 1);
define('CV\COLOR_RGBA2RGB', 1);
define('CV\COLOR_BGR2RGBA', 2);
define('CV\COLOR_RGB2BGRA', 2);
define('CV\COLOR_RGBA2BGR', 3);
define('CV\COLOR_BGRA2RGB', 3);
define('CV\COLOR_BGR2RGB', 4);
define('CV\COLOR_RGB2BGR', 4);
define('CV\COLOR_BGRA2RGBA', 5);
define('CV\COLOR_RGBA2BGRA', 5);
define('CV\COLOR_BGR2GRAY', 6);
define('CV\COLOR_RGB2GRAY', 7);
define('CV\COLOR_GRAY2BGR', 8);
define('CV\COLOR_GRAY2RGB', 8);
define('CV\COLOR_GRAY2BGRA', 9);
define('CV\COLOR_GRAY2RGBA', 9);
define('CV\COLOR_BGRA2GRAY', 10);
define('CV\COLOR_RGBA2GRAY', 11);
define('CV\COLOR_BGR2BGR565', 12);
define('CV\COLOR_RGB2BGR565', 13);
define('CV\COLOR_BGR5652BGR', 14);
define('CV\COLOR_BGR5652RGB', 15);
define('CV\COLOR_BGRA2BGR565', 16);
define('CV\COLOR_RGBA2BGR565', 17);
define('CV\COLOR_BGR5652BGRA', 18);
define('CV\COLOR_BGR5652RGBA', 19);
define('CV\COLOR_GRAY2BGR565', 20);
define('CV\COLOR_BGR5652GRAY', 21);
define('CV\COLOR_BGR2BGR555', 22);
define('CV\COLOR_RGB2BGR555', 23);
define('CV\COLOR_BGR5552BGR', 24);
define('CV\COLOR_BGR5552RGB', 25);
define('CV\COLOR_BGRA2BGR555', 26);
define('CV\COLOR_RGBA2BGR555', 27);
define('CV\COLOR_BGR5552BGRA', 28);
define('CV\COLOR_BGR5552RGBA', 29);
define('CV\COLOR_GRAY2BGR555', 30);
define('CV\COLOR_BGR5552GRAY', 31);
define('CV\COLOR_BGR2XYZ', 32);
define('CV\COLOR_RGB2XYZ', 33);
define('CV\COLOR_XYZ2BGR', 34);
define('CV\COLOR_XYZ2RGB', 35);
define('CV\COLOR_BGR2YCrCb', 36);
define('CV\COLOR_RGB2YCrCb', 37);
define('CV\COLOR_YCrCb2BGR', 38);
define('CV\COLOR_YCrCb2RGB', 39);
define('CV\COLOR_BGR2HSV', 40);
define('CV\COLOR_RGB2HSV', 41);
define('CV\COLOR_BGR2Lab', 44);
define('CV\COLOR_RGB2Lab', 45);
define('CV\COLOR_BGR2Luv', 50);
define('CV\COLOR_RGB2Luv', 51);
define('CV\COLOR_BGR2HLS', 52);
define('CV\COLOR_RGB2HLS', 53);
define('CV\COLOR_HSV2BGR', 54);
define('CV\COLOR_HSV2RGB', 55);
define('CV\COLOR_Lab2BGR', 56);
define('CV\COLOR_Lab2RGB', 57);
define('CV\COLOR_Luv2BGR', 58);
define('CV\COLOR_Luv2RGB', 59);
define('CV\COLOR_HLS2BGR', 60);
define('CV\COLOR_HLS2RGB', 61);
define('CV\COLOR_BGR2HSV_FULL', 66);
define('CV\COLOR_RGB2HSV_FULL', 67);
define('CV\COLOR_BGR2HLS_FULL', 68);
define('CV\COLOR_RGB2HLS_FULL', 69);
define('CV\COLOR_HSV2BGR_FULL', 70);
define('CV\COLOR_HSV2RGB_FULL', 71);
define('CV\COLOR_HLS2BGR_FULL', 72);
define('CV\COLOR_HLS2RGB_FULL', 73);
define('CV\COLOR_LBGR2Lab', 74);
define('CV\COLOR_LRGB2Lab', 75);
define('CV\COLOR_LBGR2Luv', 76);
define('CV\COLOR_LRGB2Luv', 77);
define('CV\COLOR_Lab2LBGR', 78);
define('CV\COLOR_Lab2LRGB', 79);
define('CV\COLOR_Luv2LBGR', 80);
define('CV\COLOR_Luv2LRGB', 81);
define('CV\COLOR_BGR2YUV', 82);
define('CV\COLOR_RGB2YUV', 83);
define('CV\COLOR_YUV2BGR', 84);
define('CV\COLOR_YUV2RGB', 85);
define('CV\COLOR_YUV2RGB_NV12', 90);
define('CV\COLOR_YUV2BGR_NV12', 91);
define('CV\COLOR_YUV2RGB_NV21', 92);
define('CV\COLOR_YUV2BGR_NV21', 93);
define('CV\COLOR_YUV420sp2RGB', 92);
define('CV\COLOR_YUV420sp2BGR', 93);
define('CV\COLOR_YUV2RGBA_NV12', 94);
define('CV\COLOR_YUV2BGRA_NV12', 95);
define('CV\COLOR_YUV2RGBA_NV21', 96);
define('CV\COLOR_YUV2BGRA_NV21', 97);
define('CV\COLOR_YUV420sp2RGBA', 96);
define('CV\COLOR_YUV420sp2BGRA', 97);
define('CV\COLOR_YUV2RGB_YV12', 98);
define('CV\COLOR_YUV2BGR_YV12', 99);
define('CV\COLOR_YUV2RGB_IYUV', 100);
define('CV\COLOR_YUV2BGR_IYUV', 101);
define('CV\COLOR_YUV2RGB_I420', 100);
define('CV\COLOR_YUV2BGR_I420', 101);
define('CV\COLOR_YUV420p2RGB', 98);
define('CV\COLOR_YUV420p2BGR', 99);
define('CV\COLOR_YUV2RGBA_YV12', 102);
define('CV\COLOR_YUV2BGRA_YV12', 103);
define('CV\COLOR_YUV2RGBA_IYUV', 104);
define('CV\COLOR_YUV2BGRA_IYUV', 105);
define('CV\COLOR_YUV2RGBA_I420', 104);
define('CV\COLOR_YUV2BGRA_I420', 105);
define('CV\COLOR_YUV420p2RGBA', 102);
define('CV\COLOR_YUV420p2BGRA', 103);
define('CV\COLOR_YUV2GRAY_420', 106);
define('CV\COLOR_YUV2GRAY_NV21', 420);
define('CV\COLOR_YUV2GRAY_NV12', 420);
define('CV\COLOR_YUV2GRAY_YV12', 420);
define('CV\COLOR_YUV2GRAY_IYUV', 420);
define('CV\COLOR_YUV2GRAY_I420', 420);
define('CV\COLOR_YUV420sp2GRAY', 420);
define('CV\COLOR_YUV420p2GRAY', 420);
define('CV\COLOR_YUV2RGB_UYVY', 107);
define('CV\COLOR_YUV2BGR_UYVY', 108);
define('CV\COLOR_YUV2RGB_Y422', 107);
define('CV\COLOR_YUV2BGR_Y422', 108);
define('CV\COLOR_YUV2RGB_UYNV', 107);
define('CV\COLOR_YUV2BGR_UYNV', 108);
define('CV\COLOR_YUV2RGBA_UYVY', 111);
define('CV\COLOR_YUV2BGRA_UYVY', 112);
define('CV\COLOR_YUV2RGBA_Y422', 111);
define('CV\COLOR_YUV2BGRA_Y422', 112);
define('CV\COLOR_YUV2RGBA_UYNV', 111);
define('CV\COLOR_YUV2BGRA_UYNV', 112);
define('CV\COLOR_YUV2RGB_YUY2', 115);
define('CV\COLOR_YUV2BGR_YUY2', 116);
define('CV\COLOR_YUV2RGB_YVYU', 117);
define('CV\COLOR_YUV2BGR_YVYU', 118);
define('CV\COLOR_YUV2RGB_YUYV', 115);
define('CV\COLOR_YUV2BGR_YUYV', 116);
define('CV\COLOR_YUV2RGB_YUNV', 115);
define('CV\COLOR_YUV2BGR_YUNV', 116);
define('CV\COLOR_YUV2RGBA_YUY2', 119);
define('CV\COLOR_YUV2BGRA_YUY2', 120);
define('CV\COLOR_YUV2RGBA_YVYU', 121);
define('CV\COLOR_YUV2BGRA_YVYU', 122);
define('CV\COLOR_YUV2RGBA_YUYV', 119);
define('CV\COLOR_YUV2BGRA_YUYV', 120);
define('CV\COLOR_YUV2RGBA_YUNV', 119);
define('CV\COLOR_YUV2BGRA_YUNV', 120);
define('CV\COLOR_YUV2GRAY_UYVY', 123);
define('CV\COLOR_YUV2GRAY_YUY2', 124);
define('CV\COLOR_YUV2GRAY_Y422', 123);
define('CV\COLOR_YUV2GRAY_UYNV', 123);
define('CV\COLOR_YUV2GRAY_YVYU', 124);
define('CV\COLOR_YUV2GRAY_YUYV', 124);
define('CV\COLOR_YUV2GRAY_YUNV', 124);
define('CV\COLOR_RGBA2mRGBA', 125);
define('CV\COLOR_mRGBA2RGBA', 126);
define('CV\COLOR_RGB2YUV_I420', 127);
define('CV\COLOR_BGR2YUV_I420', 128);
define('CV\COLOR_RGB2YUV_IYUV', 127);
define('CV\COLOR_BGR2YUV_IYUV', 128);
define('CV\COLOR_RGBA2YUV_I420', 129);
define('CV\COLOR_BGRA2YUV_I420', 130);
define('CV\COLOR_RGBA2YUV_IYUV', 129);
define('CV\COLOR_BGRA2YUV_IYUV', 130);
define('CV\COLOR_RGB2YUV_YV12', 131);
define('CV\COLOR_BGR2YUV_YV12', 132);
define('CV\COLOR_RGBA2YUV_YV12', 133);
define('CV\COLOR_BGRA2YUV_YV12', 134);
define('CV\COLOR_BayerBG2BGR', 46);
define('CV\COLOR_BayerGB2BGR', 47);
define('CV\COLOR_BayerRG2BGR', 48);
define('CV\COLOR_BayerGR2BGR', 49);
define('CV\COLOR_BayerBG2RGB', 48);
define('CV\COLOR_BayerGB2RGB', 49);
define('CV\COLOR_BayerRG2RGB', 46);
define('CV\COLOR_BayerGR2RGB', 47);
define('CV\COLOR_BayerBG2GRAY', 86);
define('CV\COLOR_BayerGB2GRAY', 87);
define('CV\COLOR_BayerRG2GRAY', 88);
define('CV\COLOR_BayerGR2GRAY', 89);
define('CV\COLOR_BayerBG2BGR_VNG', 62);
define('CV\COLOR_BayerGB2BGR_VNG', 63);
define('CV\COLOR_BayerRG2BGR_VNG', 64);
define('CV\COLOR_BayerGR2BGR_VNG', 65);
define('CV\COLOR_BayerBG2RGB_VNG', 64);
define('CV\COLOR_BayerGB2RGB_VNG', 65);
define('CV\COLOR_BayerRG2RGB_VNG', 62);
define('CV\COLOR_BayerGR2RGB_VNG', 63);
define('CV\COLOR_BayerBG2BGR_EA', 135);
define('CV\COLOR_BayerGB2BGR_EA', 136);
define('CV\COLOR_BayerRG2BGR_EA', 137);
define('CV\COLOR_BayerGR2BGR_EA', 138);
define('CV\COLOR_BayerBG2RGB_EA', 137);
define('CV\COLOR_BayerGB2RGB_EA', 138);
define('CV\COLOR_BayerRG2RGB_EA', 135);
define('CV\COLOR_BayerGR2RGB_EA', 136);
define('CV\COLOR_BayerBG2BGRA', 139);
define('CV\COLOR_BayerGB2BGRA', 140);
define('CV\COLOR_BayerRG2BGRA', 141);
define('CV\COLOR_BayerGR2BGRA', 142);
define('CV\COLOR_BayerBG2RGBA', 141);
define('CV\COLOR_BayerGB2RGBA', 142);
define('CV\COLOR_BayerRG2RGBA', 139);
define('CV\COLOR_BayerGR2RGBA', 140);
define('CV\COLOR_COLORCVT_MAX', 143);

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
     * @param array $faces
     * @param array $labels
     * @return null
     */
    public function train(array $faces, array $labels) {
        return null;
    }

    /**
     * @param Mat $face
     * @param float $confidence
     * @return int $label
     */
    public function predict(\CV\Mat $face, float &$confidence) {
        return $label = 1;
    }

    /**
     * @param array $faces
     * @param array $labels
     * @return null
     */
    public function update(array $faces, array $labels) {
        return null;
    }

    /**
     * @param string $filename
     * @return null
     */
    public function read(string $filename) {
        return null;
    }

    /**
     * @param string $filename
     * @return null
     */
    public function write(string $filename) {
        return null;
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
     * @param Mat $image
     * @param array $faces
     * @param array $landmarks
     * @return null
     */
    public function fit(Mat $image, array $faces, array &$landmarks) {
        return null;
    }
}

namespace CV\Dnn;
use CV\Mat;
use CV\Scalar;
use CV\Size;

class Net {
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

/**
 * @param Mat $image
 * @param float $scalefactor
 * @param Size $size
 * @param Scalar $mean
 * @param bool $swapRB
 * @param bool $crop
 * @return Mat
 */
function blobFromImage(Mat $image, float $scalefactor = 1.0, Size $size, Scalar $mean, $swapRB = true, $crop = true) {
    return new Mat();
}

/**
 * @param string $filename
 * @return Net
 */
function readNetFromTorch(string $filename) {

}

/**
 * @param string $protoFilename
 * @param string $modelFilename
 * @return Net
 */
function readNetFromCaffe(string $protoFilename, $modelFilename) {

}

/**
 * @param string $protoFilename
 * @param string $modelFilename
 * @return Net
 */
function readNetFromTensorflow(string $model, $config) {

}