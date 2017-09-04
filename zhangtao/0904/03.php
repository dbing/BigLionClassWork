<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/04
 * @param  工厂模式和单利模式结合
 * @return NULL
 */
require 'Mysql.class.php';
// require '2.php';

// class Factroy
// {
// 	static function getMysql()
// 	{
// 		return Mysql::getInstance();
// 	}
// }

// $db = Factroy::getMysql();
// $db2 = Factroy::getMysql();
// var_dump($db);
// echo '<hr>';
// var_dump($db2);
// if($db === $db2)
// {
// 	echo 'OK';
// }else
// {
// 	echo 'NO';
// }

$db = Mysql::getInstance();
$db2 = Mysql::getInstance();
if($db === $db2)
{
	echo 'OK';
}else
{
	echo 'NO';
}