<?php
header("content-type:text/html;charset=utf-8");

// function one(){
// 	static $num = 0;
// 	echo $num += 1;
// 	echo '<br>';
// }
// one(); //第一次调用， 1
// one(); //第二次调用
class L{
	public static $num;
	public function __construct(){
		self::$num += 1;
	}
}

$l = new L;
$l1 = new L;

echo L::$num;