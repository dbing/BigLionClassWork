<?php 
header("content-type:text/html;charset=utf-8");
class dome
{
		//私有的静态
		private static $res;
		const NAME = "小凡";
		public function __construct()
		{
			self::$res = "6666".self::NAME;
		}
		public function data()
		{
			//self 本类
			return self::$res;
		}
}
	$are = new dome;
	echo $are->data();

 ?>