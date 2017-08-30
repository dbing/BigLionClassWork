<?php
header("content-type:text/html;charset=utf-8");
/*
	 name:Zhao Yu
	 hobby:吃饭睡觉打豆豆

 */  

	class Man{

		 public $user ='男';
		 public $name;
		 public function __construct($name)
		 {
		 	$this->name = $name;
		 }

	}

	$info = new Man("拜拜");
	$hei = new Man("嘿嘿");
	$demo = $info;
	$demo->user =  '女';//赋值 共有同一块内存
	$sex = $demo;
	echo $info->user;
	echo "<br>";
	$app = clone $info;
 	$app->name = '666';//复制开辟新的空间
 	echo $info ->name;

 ?>