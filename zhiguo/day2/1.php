<?php

class Demo{

public $name;
const pi=3.1415;

public function doPi(){
	echo self::pi;
}

}
$demo=new Demo;
//echo Demo::pi;
//简析常量 类名::常量名         类内（self::常量名）

//var_dump($demo);
$demo->doPi();