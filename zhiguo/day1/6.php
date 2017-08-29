<?php

 header('content-type:text/html;charset=utf8');

class num{
	public $num;
	public function __construct($num){

		$this->num=$num;
	}


	public function prints()
	{
		for ($i=1; $i <=$this->num ; $i++) { 

			echo '<center>';
			echo str_repeat('*', $i);
			echo '<br>';
		}
	}

}
$obj=new num(10);
$obj->prints();

