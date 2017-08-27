<?php 

header("content-type:text/html;charset=utf-8;");

class Pyramid{
    public $num;

    public function __construct($num){
    	$this->num = $num;
    }


    public function printmid(){
    	echo "<center>";
    	for ($i=1; $i <= $this->num; $i++) { 
    		echo str_repeat('*',($i*2) - 1 );
    		echo "<br />";
    	}
    	echo "</center>";
    }

}

$obj = new Pyramid(30);

$obj->printmid();

 ?>