<?php 
header('content-type:text/html;charset=utf8');
/**
* 类
*/
class Man 
{
	//属性
	public $name;
	public $age;
	//方法
	public function cry()
	{
		echo "555";
	}
}
//实例化
$m1 = new Man;
//调用属性
$m1->name = '老王';
$m1->age = 60;
//调用方法
$m1->cry();
var_dump($m1);

echo "<br>";

$m2 = new Man;
$m2->name = '小明';
$m2->age = 18;
//调用方法
$m1->cry();
var_dump($m2);


