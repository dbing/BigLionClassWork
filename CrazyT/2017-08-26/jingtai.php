<?php 
class Man
{
	// 静态属性-类属性
	public static $name= 2;

	public $num = 3;

	// 静态方法
	static public function test()
	{
		echo 'Hi';
	}

	public function demo()
	{
		echo 'demo';
	}
}

$m = new Man;
//静态属性不能通过对象来访问(静态属性不可以由对象通过 -> 操作符来访问)
//echo $m->$name;
//静态方法能通过对象来访问
//$m->test();
//静态方法可以通过类来直接访问
//Man::test();

var_dump($m);
echo '<hr>';

//Man::test();
//用静态方式调用一个非静态方法会导致一个 E_STRICT 级别的错误。 
//Man::demo();
//静态属性只能被初始化为文字或常量，不能使用表达式

Man::test();

$className = 'Man';
$className::test();


?>