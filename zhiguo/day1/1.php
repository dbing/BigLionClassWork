<?php

$name='小明';
$age=18;

$name1='隔壁老王';
$age='58';

class Man{
	public $name;
	public $age;
	public function ciy(){
		echo '555';
	}
}
$obj=new Man;
$obj->name='小明';
$obj->ciy();
$obj->age='18';
var_dump($obj);

echo '<br>';

$obj1=new Man;
$obj1->name='隔壁老王';
$obj->ciy();
$obj1->age='58';
var_dump($obj1);
