
<!-- 张志国 -->
<?php
class Animal
{
	public $name;

	//final public $name;
	public function __construct($name)
	{
		echo '嗷嗷大叫';
		$this->name = $name;
	}

	public function shout($n)
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

	public function shout($num)
	{
		for($i=1;$i<=$num;$i++)
		{
			echo '喵喵';
			echo '<br>';
		}
	}
}

$cat = new Cat('猫猫');

echo $cat->shout(12);

//会继承父类的 如果子类的方法和父类的一样会重写
//
//final  不能被继承