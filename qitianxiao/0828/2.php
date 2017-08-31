<?php 

class Man{
	static public $name = '123';

	public $num = 1000;

	static public function test(){
        echo "123";
        //echo $this->num;
	}

}

$m = new Man;

Man::test();
var_dump($m);


 ?>