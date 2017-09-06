<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */ 
	include("01.php");
	class info{

		static function getmysql()
		 {
		 	return Mysql::mys();
		 }
	}
	//工厂模式
	$are1 = info::getmysql();
	$are2 = info::getmysql();
	echo $are1 === $are2? 'ok' : "no";


 ?>