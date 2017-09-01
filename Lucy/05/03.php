<?php
header('content-type:text/html;charset=utf-8');
class Animal  //final修饰，不能被重写
{
	public $name;
	public function __construct($name) //final 修饰方法不能被重写
	{
		echo '大叫';
		$this->name = $name;
	}
//父类的私有属性，可以被子类重写
	private function shout($n)
	{
		echo '动物叫';
	}

}


class Cat extends Animal
{
	public function __construct($name)
	{
		parent::__construct($name);

		echo '喵喵小叫';
	}
//方法的重写，相同的方法名和参数个数，并且权限修饰符，任意。
	public function shout($num)
	{
		for($i=1;$i<=$num;$i++)
		{
			echo '喵喵';
			echo '<br>';
		}
	}
}

$cat = new Cat('猫');
echo '<br>';
$cat->shout(3);

?>