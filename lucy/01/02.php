<?php 
header('content-type:text/html;charset = utf-8');
//定义常量
define('PI', 3.1415926);

$r = 3;
echo '求圆的面积:';
echo PI*$r*$r;
echo "<br>";
echo '求圆的周长:';
echo 2*PI*$r;


/**
* 圆
*/
class Circle
{
	
	function getArea($r)
	{
		return PI*$r*$r;
	}

	function getPerimeter($r)
	{
		return 2*PI*$r;
	}
}

echo "<hr>";
$c = new Circle;
echo '求圆的面积：'.$c->getArea(10);
echo "<br>";
echo '求圆的周长：'.$c->getPerimeter(10);