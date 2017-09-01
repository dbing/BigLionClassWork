<?php
/**
*	杨嘉峰-final
*	2017年9月1日20:26:36
*
**/ 
header("content-type:text/html;charset=utf-8");

class Animals
{
	private $name;
	final public function shout()
	{
		echo '动物叫';
	}
}


class Cat extends Animals
{

}

$cat = new Cat;
$cat->show();


















 ?>