<?php 
class Man
{
	// 静态属性 全局
	public static $num = 1;

	public function __construct()
	{
		// Man::$num += 1;
		self::$num += 1;
	}

}


echo Man::$num;
