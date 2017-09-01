<?php 
header('content-type:text/html;charset = utf-8');
/**
* 人类
*/
class Man
{
	public $name;
	//在实例化对象的时候自动调用构造方法
	public function __construct($user='')
	{
		$this->name = $user;
		echo "Hi".$this->name;
	}
	public function say()
	{
		echo "hehe";
	}
	
	//析构方法，在销毁对象的时候，自动触发（unset（对象）或者本页代码执行完的时候执行）
	public function __destruct()
	{
		echo "我走了";
	}
}

$m = new Man;
$m->say();
unset($m);
echo "<hr>";
//在实例化方法的时候，可以直接给构造方法传参
$n = new Man('lisi');

