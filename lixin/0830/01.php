<?php 
header("Content-type:text/html;charset=utf-8;");

class Animal
{
	public $name='小黄';
}

$cat = new Animal;
$dog = $cat;

$dog->name = '小黑';


echo $cat->name;		// 小黄  

echo '<hr>';

$num = 'My name is bing';
$abc =& $num;
$abc = 'braem';
var_dump($num);
var_dump($abc);
?>