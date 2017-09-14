<?php

header("content-type:text/html;charset=utf-8");

class Animals{
	private $name;
	final public function shout(){
		echo '叫声';
	}
}


class Cat extends Animals{

}

$cat = new Cat;
$cat->show();


















 ?>