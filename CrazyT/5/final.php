<?php 

class Animal
{
	public $name;
	public function __construct($name)
	{
		echo '嗷~~~';
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

		echo '猫叫';
	}

	public function shout($num)
	{
		for($i=1;$i<=$num;$i++)
		{
			echo '喵~~~~~';
		}
	}
}

$cat = new Cat('猫');