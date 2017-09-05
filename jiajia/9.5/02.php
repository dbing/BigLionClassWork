<?php
header("content-type:text/html;charset=utf8");
/**
*类中还有常量和静态，通过类名直接访问
*/
// error_reporting(0);
//面向过程
//圆的半径
$r=4;
//圆的周长
// $perimeter=2*3.14*$r;
// $area=3.14*$r*$r;
// echo $perimeter;
// echo $area;

//定义常量
define('P',3.14);

//面向对象
class Circle
{
    public function GetPer($r)
    {
        return P*$r*2;
    }
    public function GetArea($r)
    {
        return P*$r*$r;
    }
}
//实例化
$cir=new Circle;
echo $cir->GetPer(5);
echo $cir->GetArea(5);
?>