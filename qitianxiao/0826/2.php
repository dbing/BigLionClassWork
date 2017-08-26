<?php 
header('content-type:text/html;charset=utf8');

class Man{
	public $name;

	public function say(){
		echo "hi";
	}

	public function __construct(){
		echo "你好";
	}

	public function __destruct(){
		echo "我也好";
	}


}


$m = new Man;

$m->say();

 ?>