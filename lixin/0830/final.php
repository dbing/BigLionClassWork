<?php 
//李鑫
//0830
class Animal
{
	private $name;
	final public function shout()
	{
		echo '嘻嘻嘻';
	}
}


class Cat extends Animal
{

}

$cat = new Cat;
$cat->shout();

?>