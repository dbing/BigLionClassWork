<?php
/**
 * @author 张涛 2017/09/01
 * @param  魔术方法   某些情况下，会自动调用的方法
 * @return NULL
 */
//自动加载(放在类外)  加载类时
// function __autoload($class)
// {
// 	require "$class" . '.class.php';
// }

function myAutoLoaderl($className)
{
	var_dump($className);
	include $className. '.class.php';
}
spl_autoload_register('myAutoLoaderl');

$m = new Magic;
var_dump($m);