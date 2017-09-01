<?php 
//李鑫
//0830
class Animal
{
	public $name;
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
// $cat->shout(2);
?>