﻿<?php 
header("Content-type:text/html;charset=utf-8;");

class Animal
{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}

$cat = new Animal('毛毛');
$dog = clone $cat;


$dog->name = '狗狗';
echo $cat->name;
