<?php 
header("Content-type:text/html;charset=utf8;");
class Animal
{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}

$cat = new Animal('三毛');
//克隆对象，生成新地址
$dog = clone $cat;
$dog->name = '狗蛋';
echo $cat->name;
echo $dog->name;

