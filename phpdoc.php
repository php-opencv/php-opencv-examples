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

/**
 * @param string $trackbarname
 * @param string $winname
 * @param int $value
 * @param int $count
 * @param callable|null $onChange
 */
function createTrackbar(string $trackbarname, string $winname, int $value, int $count, callable $onChange = null)
{

}

/**
 * @param String $winname
 */
function destroyWindow(String $winname)
{

}

/**
 * getOptimalDFTSize函数返回给定向量尺寸的傅立叶最优尺寸大小。
 * 为了提高离散傅立叶变换的运行速度，需要扩充图像，
 * 而具体扩充多少，就有这个函数来计算得到。
 *
 * @param int $vecsize 需要计算最优的原始大小
 *
 * @return int 返回最优大小
 */
function getOptimalDFTSize(int $vecsize)
{

}

/**
 * 获取滑动条的值
 * @param String $trackbarname 轨迹条的名称
 * @param String $winname 轨迹条的父窗口名称
 * @return int
 */
function getTrackBarPos(String $trackbarname, String $winname)
{

}

/**
 * @return int
 */
function getTickCount()
{

}

/**
 * @return double
 */
function getTickFrequency()
{

}

/**
 * @param String $winname
 * @param null $onMouse
 */
function setMouseCallback(String $winname, $onMouse = null)
{

}

/**
 * 返回外部矩形边界
 *
 * @param array $points point数组
 *
 * @return Rect
 */
function boundingRect(array $points)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_8UC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_8SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_16UC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_16SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_32SC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_32FC(int $n)
{

}

/**
 * @param int $n
 *
 * @return int
 */
function CV_64FC(int $n)
{

}

/**
 * GUI展示图片
 * @param string $windowName 窗口名称
 * @param Mat $mat 需要展示的Mat矩阵
 */
function imshow(string $windowName, Mat $mat)
{

}

/**
 * 等待输入建输出后继续执行，
 * 如果$sec大于0的等待多少秒，如果为0则一直等待
 * @param int $sec 单位秒
 */
function waitKey(int $sec)
{

}

/**
 * 移动窗口
 * @param string $winname
 * @param int $x
 * @param int $y
 */
function moveWindow(string $winname, int $x, int $y)
{

}

/**
 * 创建窗口
 * @param string $winname
 * @param int $flags
 */
function namedWindow(string $winname, int $flags = WINDOW_AUTOSIZE)
{

}

function addWeighted(Mat $src1, float $alpha, Mat $src2, float $beta, float $gamma, Mat &$dst = NULL, int $dtype = -1)
{

}

function dft(Mat $src, Mat $dst, int $flags = 0, int $nonzeroRows = 0)
{

}

/**
 * @param Mat $x
 * @param Mat $y
 * @param Mat $dst
 */
function magnitude(Mat $x, Mat $y, Mat $dst)
{

}

/**
 * @param Mat|Scalar $src1
 * @param Mat|Scalar $src2
 * @param Mat|Scalar $dst
 */
function add($src1, $src2, $dst)
{

}

function log() {}

/**
 * @param Mat $src
 * @param Mat $dst
 * @param int $alpha
 * @param int $beta
 * @param int $norm_type
 * @param int $dtype
 */
function normalize(Mat $src, Mat $dst, int $alpha = 1, int $beta = 0, int $norm_type, $dtype = -1)
{

}

function GaussianBlur(Mat $src, Mat $dst, Size $ksize, double $sigmaX, double $sigmaY = 0, $borderType = BORDER_DEFAULT)
{

}

/**
 * 膨胀
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function dilate(Mat $src, Mat $dst, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

/**
 * 腐蚀
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function erode(Mat $src, Mat $dst, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

/**
 * @param Mat        $src        输入的图片
 * @param Mat        $dst        输出和src一样的size和channel的图片
 * @param int        $ddepth     原图像的深度，$src->depth()
 * @param Mat        $kernel     卷积核，是一个单通道浮点型的矩阵，如果你想使用不同的核在不同的通道，那么可以使用函数Split（）将通道分离，再逐个使用核运算
 * @param Point|null $anchor     核的中心，默认在核的中点处
 * @param double     $delta      未知用途
 * @param int        $borderType 未知用途
 *
 * @return null
 */
function filter2D(Mat $src, Mat &$dst, int $ddepth, Mat $kernel, Point $anchor = null, double $delta = 0, int $borderType = BORDER_DEFAULT)
{

}

/**
 * 创建核
 *
 * @param int        $shape
 * @param Size       $ksize
 * @param Point|null $achor
 *
 * @return Mat
 */
function getStructuringElement(int $shape, Size $ksize, Point $achor = null)
{

}

/**
 * 开闭运算、顶帽、黑帽
 *
 * @param Mat         $src
 * @param Mat         $dst
 * @param int         $op
 * @param Mat         $kernel
 * @param Point|null  $anchor
 * @param int         $iterations
 * @param int         $borderType
 * @param Scalar|null $borderValue
 */
function morphologyEx(Mat $src, Mat $dst, int $op, Mat $kernel, Point $anchor = null, int $iterations = 1, int $borderType = BORDER_CONSTANT, Scalar $borderValue = null)
{

}

function LUT() {}

/**
 * 漫水填充
 *
 * @param Mat         $image
 * @param Point       $seedPoint
 * @param Scalar      $newVal
 * @param Mat|null    $mat
 * @param Rect|null   $rect
 * @param Scalar|null $loDiff
 * @param Scalar|null $upDiff
 * @param int         $flags
 */
function floodFill(Mat $image, Point $seedPoint, Scalar $newVal, Mat $mat = null, Rect $rect = null, Scalar $loDiff = null, Scalar $upDiff = null, int $flags = 4)
{

}

/**
 * 自适应阈值化函数
 *
 * @param Mat    $src
 * @param Mat    $dst
 * @param double $maxValue
 * @param int    $adaptiveMethod
 * @param int    $thresholdType
 * @param int    $blockSize
 * @param double $C
 */
function adaptiveThreshold(Mat $src, Mat $dst, double $maxValue, int $adaptiveMethod, int $thresholdType, int $blockSize, double $C)
{

}

/**
 * @param Mat        $image
 * @param array      $contours
 * @param int        $mode
 * @param int        $method
 * @param Point|null $offset
 */
function findContoursWithoutHierarchy(Mat $image, array $contours, int $mode, int $method, Point $offset = null)
{

}

/**
 * @param Mat        $image      要绘制轮廓的图像
 * @param array      $contours   所有输入的轮廓，每个轮廓被保存成一个point二位数组（向量）
 * @param int        $contourIdx 指定要绘制轮廓的编号，如果是负数，则绘制所有的轮廓
 * @param Scalar     $color      绘制轮廓所用的颜色
 * @param int        $thickness  绘制轮廓的线的粗细，如果是负数，则轮廓内部被填充
 * @param int        $lineType   绘制轮廓的线的连通性
 * @param array      $hierarchy  关于层级的可选参数，只有绘制部分轮廓时才会用到
 * @param            $maxLevel   绘制轮廓的最高级别，这个参数只有hierarchy有效的时候才有效
 *                               maxLevel=0，绘制与输入轮廓属于同一等级的所有轮廓即输入轮廓和与其相邻的轮廓
 *                               maxLevel=1, 绘制与输入轮廓同一等级的所有轮廓与其子节点。
 *                               maxLevel=2，绘制与输入轮廓同一等级的所有轮廓与其子节点以及子节点的子节点
 * @param Point|null $offset
 */
function drawContours(Mat $image, array $contours,
                      int $contourIdx, Scalar $color,
                      int $thickness = 1, int $lineType = LINE_8,
                      array $hierarchy = [],
                      $maxLevel = INT_MAX, Point $offset = null)
{

}

function fillPoly() {}
function absdiff() {}
function blur() {}
function medianBlur() {}
function bilateralFilter() {}
function Sobel() {}
function Scharr() {}
function Laplacian() {}
function convertScaleAbs() {}

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