<?php
header("content-type:text/html;charset=utf-8");
class St {
	//静态属性  类属性
	static public $name = '张三';
	//静态方法
	static public function one(){
		echo 'hello world'."<br>";
	}
	//非静态
	public function two(){
		echo '不是静态方法'."<br>";
	}
}

$s = new St;
//静态属性不能通过对象访问
var_dump($s);
//静态方法能通过对象访问
$s->one();
//静态方法可通过类访问
St::one();
//静态方式去调用非静态方法，会报错（5.5提示 不是静态方法）
// St::two();
// 5.3以上版本可以通过变量来调用
$name = 'St';
$name::one();