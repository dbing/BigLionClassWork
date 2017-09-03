<!-- 张志国 -->
<?php


// function __autoload($class)
// {
// 	// var_dump($class);
// 	include($class.'.class.php');
// }

function my1($name)
{

	@include ($name.'.class.php');
}

function my2($name)
{
	var_dump('auto2 class-->'.$name);
	@include ('lib/'.$name.'.class.php');
}

spl_autoload_register('my1');
spl_autoload_register('my2');



$w1 = new Women;
var_dump($w1);
echo '<br>';
$db = new Women();
var_dump($db);