<?php 
class Man
{
	// 静态属性  -类属性
	public static $num=1;

	public function __construct()
	{
		// self代表本类，用self：：调用静态属性
		self::$num += 1;
	}

}


echo Man::$num;
