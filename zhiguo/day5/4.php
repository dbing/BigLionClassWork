<!-- 张志国 -->
<?php 
header("Content-type:text/html;charset=utf-8;");

class Animal
{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}

$cat = new Animal('白白');
$pig = clone $cat;


$pig->name = '毛毛';
echo $pig->name;