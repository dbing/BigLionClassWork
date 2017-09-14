<?php 
header("content-type:text/html;charset=utf-8");

class info{
	public $name = '小米';
}

$cat = new info;

$big = $cat;



// echo $cat->name;

$big->name = '大米';

$cat->name = '大豆';

$big = $cat;

$big->name = '三毛';


echo $cat->name;  













 ?>