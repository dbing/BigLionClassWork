<?php
header("content-type:text/html;charset=utf-8");
// 类与常量
class One {
	const PI = 3.1415926;
	public function one(){
		echo self::PI ."<br>";
	}

}

$one = new One;
// 类名 :: 常量名
echo $one->one();