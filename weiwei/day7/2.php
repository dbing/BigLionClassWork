<?php 
/*
geng
 */
 header("content-type:text/html;charset=utf-8");
function myAutoLoader1($name)
{
	var_dump('auto1 class-->'.$name);
	@include $name.'.class.php';
}

function myAutoLoader2($name)
{
	var_dump('auto2 class-->'.$name);
	@include 'lib/'.$name.'.class.php';
}

spl_autoload_register('myAutoLoader2');
spl_autoload_register('myAutoLoader1');
$w1 = new Women;
var_dump($w1);
$db = new MySql();
var_dump($db);
?>