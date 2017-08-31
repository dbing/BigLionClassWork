<?php
header("Content-type:text/html;charset=utf-8;");

class Animal
{
    public $name='小蓝';
}
$cat = new Animal;
$dog = $cat;
$dog->name = '小白';
echo $cat->name;
echo '<hr>';
$num = 'My name is gengjingwei';
$abc =& $num;
$abc = 'chaojiwei';
var_dump($num);
var_dump($abc);
?>