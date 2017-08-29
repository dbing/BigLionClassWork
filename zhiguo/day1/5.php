<?php

class Cat
{

	public $name;
	public $color;
	public $age;

	public function  __construct($name,$age,$color){
		$this->name=$name;
		$this->age=$age;
		$this->color=$color;

	}

	public function say(){
		if($this->name=='小白'){
			echo $this->name.$this->age.$this->color;
		}
		elseif($this->name=='小黑')
		{
			echo $this->name.$this->age.$this->color;
		}else{
			echo '老太太没有这只猫';
		}
	}

}
$mao=new Cat('小白','18','白色');
$mao->say();