<?php
/*
 *
 *  对象的赋值
 * */
header('Content-type:text/html;charset=utf-8');

class cat{
    public $cat = '小黄';
}
$cat = new cat;
$dog = $cat;

$dog->name = 'xiaobai';

$pig = $dog;
$pig->name = 'xiaodidi';

echo $cat->name;

echo "<br/><br/>";

$num = 'NO 问题';
$abc = & $num;
$abc ='break';
var_dump($num);
var_dump($abc);