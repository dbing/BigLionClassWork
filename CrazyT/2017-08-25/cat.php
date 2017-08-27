<?php 
class Cat
{
	public $name;
	public $age;
	public $color;

	public function __construct($name,$age,$color)
	{
		$this->name = $name;
		$this->age = $age;
		$this->color = $color;
	}

	public function getInfo()
	{
		echo "名字：".$this->name."<br />";
		echo "年龄：".$this->age."<br />";
		echo "颜色：".$this->color."<br />";
		echo "<hr>";
	}


}


$bai = new Cat('小白',3,'白色');
$bai->getInfo();

$hei = new Cat('小黑',5,'黑色');
$hei->getInfo();

?>