<?php
header("content-type:text/html;charset=utf-8");

define('PI', 3.1415926);
$r = 10;
//圆的面积
echo PI * $r * $r ."圆的面积<br />";

//圆的周长
echo 2 * PI * $r . "圆的周长<br />";

//圆的类
class Circle{
	//圆的面积
	public function area($r){
		return PI * $r * $r;
	}

	//圆的周长
	public function perimeter($r){
		return 2 * PI * $r;
	}
}

$circle = new Circle();
echo $circle->area(10)."方法 圆的面积<br/>"; 

$circle = new Circle();
echo $circle->perimeter(10)."方法 圆的周长<br/>";