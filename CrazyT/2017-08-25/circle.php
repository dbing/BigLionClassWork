<?php
//定义常量
define('PI',3.1415926);
$r = 5;
echo PI * $r * $r;
echo 2 * PI * $r;
//面向过程写法
echo "<hr>";
//面向对象写法
class CircleSize{
	public function getS($a){
		return $a * $a * 3.14;
	}
	public function getC($a){
		return $a * 2 * 3.14;
	}
}
$circle = new CircleSize;
echo $circle->getS(5);
echo $circle->getC(5);

?>