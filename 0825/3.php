<?php
header("content-type:text/html;charset=utf-8");

class Action {
	//构造方法(自动调用,又称之为 魔术方法)
	public function __construct($user){
		$this->name = $user. "<br />";
	}

	// public function say(){
	// 	echo 'hello world~'."<br/>";
	// }

	// //析构方法(当对象没有被使用，也会被触发)
	// public function __destruct(){
	// 	echo 'destruct~'."<br/>";
	// }
	 
	public $name;
	public function say(){
		echo 'Hi ' . $this->name . "<br />";
	}
}

$obj = new Action('改锥');
$obj->say();

$obj1 = new Action('改锥1');
$obj1->say();