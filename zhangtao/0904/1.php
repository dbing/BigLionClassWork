<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/04
 * @param  工厂模式  通过一个方法，造出实例化对象
 * @return NULL
 */
require 'Mysql.class.php';

class Factroy
{
	static function getMysql()
	{
		return new Mysql();
	}
}

$db = Factroy::getMysql();
var_dump($db);