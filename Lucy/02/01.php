<?php 
header('content-type:text/html;charset=utf-8');
/**
* 
*/
class Demo
{
	public $name;
	const pi = 3.1415926;
	public function getArea()
	{
		//self代表本类
		return self::pi * $r * $r;
	}

}

$d = new Demo;

var_dump($d);
//输出常量（类外或者类内都可以这样写）
echo Demo::pi;