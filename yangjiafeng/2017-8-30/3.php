<?php 
header("content-type:text/html;charset=utf-8");

/**
*	杨嘉峰-对象的复制
*	2017年8月31日20:59:13
*
**/

class Animals
{
	public $name;
	public function __construct($name)
	{
		echo '动物叫';
	}
}


class Cat extends Animals
{
	public function __construct()
	{
		parent::__construct($name);
		echo '喵喵叫';
	}

	public function shout($num)
	{
		for($i=1;$i<=$num;$i++)
		{
			echo '喵喵';
			echo '<br>';
		}
	}
}

$cat = new Cat('猫');
// $cat->shout(3);




 ?>