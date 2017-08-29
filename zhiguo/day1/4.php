<?php

 header('content-type:text/html;charset=utf8');

class Man{

public $name;
public function say()
{
	echo "hi my name is ".$this->name;
}
public function __construct($name){

	$this->name=$name;
}

}

$obj=new Man('zhangsan');
$obj->say();
echo '<br>';
$obj1=new Man('lisi');
$obj1->say();
