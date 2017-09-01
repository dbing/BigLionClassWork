<?php 
header("content-type:text/html;charset=utf-8");

/**
*	杨嘉峰-对象的赋值
*	2017年8月31日20:10:07
*/
class Man
{
	public $name = '小黄';
}

$cat = new Man;

$dog = $cat;

// var_dump($dog);

// echo $cat->name;

$dog->name = '小黑';

$cat->name = '小花';

$dog = $cat;

$dog->name = '三毛';


echo $cat->name;  //赋值取最后一个！













 ?>