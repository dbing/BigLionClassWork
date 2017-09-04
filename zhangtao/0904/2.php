<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/04
 * @param  单利模式  一个类只能实例化一个对象
 *         #因为每实例化一个对象，都会在堆区中产生一个模块
 *         #所以使用单利模式可以让实例化后的对象相同
 *         1.私有化构造方法
 *         2.公开的静态方法
 *         3.私有的静态属性
 *         4.防止克隆（私有化克隆方法）和继承（final修饰方法名就可以）
 * @return NULL
 */
// require 'Mysql.class.php';

class Mysql
{
	private static $instance;
	private function __construct()
	{

	}
	static function getInstance()
	{	
		// 判断当前对象是否是本类方法
		if(self::$instance instanceof self)
		{
			return self::$instance;
		}else
		{
			return self::$instance = new self();
		}
		
	}
	// 不想让外部克隆类
	private function __clone()
	{
		echo '该对象不能被克隆';
	}
}
// 目的是得到同一个对象
// $db = new Mysql;
$db1 = Mysql::getInstance();
$db2 = Mysql::getInstance();
// $db2 = clone $db1;

if($db1 === $db2)
{
	echo 'OK';
}else
{
	echo 'NO';
}
var_dump($db1);