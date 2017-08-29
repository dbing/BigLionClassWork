<?php 
class Demo{
	public $name = 'demo';
	const pi = 3.14;

	public function getpi(){
		echo Demo::pi;
	}
}



$a = new Demo;
echo $a->name;
echo Demo::pi;
echo "<hr>";
$a->getpi();
var_dump($a);

 ?>