<?php


class Man{
	static public $num=1;//私有的静态变量
	public function __construct(){
		self::$num+=1;
	}
}

echo Man::$num;