<?php 
header("Content-type:text/html;charset=utf-8;");

class Animal
{
	public $name='小黄';
}

$cat = new Animal;
$dog = $cat;
//赋值一个对象,两个对象指向相同的地址，一个变化另一个也变化
$dog->name = '小黑';


echo $cat->name;

echo '<hr>';
//利用取地字符&，两个变量指向同一个地址，一同变化
$num = 'My name is bing';
$abc =& $num;
$abc = 'braem';
var_dump($num);
var_dump($abc);
?>