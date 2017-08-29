<?php 
class Man
{
	// 静态属性-类属性
	public static $name= 2;

	public $num = 3;

	// 静态方法
	static public function test()
	{
		echo 'Hi';
	}

	public function demo()
	{
		echo 'demo';
	}
}

$m = new Man;
$m->test();