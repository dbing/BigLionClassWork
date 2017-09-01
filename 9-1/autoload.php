<?php 
	/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */ 
    //自动加载方法
	function autoloads($name)
	{
		@include($name.'.class.php');
	}
	function autoloadse($name)
	{
		include('app/'.$name.'.class.php');
	}
	spl_autoload_register('autoloads');
	spl_autoload_register('autoloadse');
    $info =  new Auto;
    $zo  =   new Zoo;
    var_dump($zo->name);die;
 ?>