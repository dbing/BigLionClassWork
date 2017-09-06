<?php
 header("content-type:text/html;charset=utf-8");
error_reporting(E_ALL ^E_DEPRECATED);
require 'DataBase.Interface.php';
require 'Mysql.class.php';

class Factory{
	static function getMysql(){
		 return new MySql();
	}
}

//工厂模式
// $db = Factory::getMysql();
// $db1 = Factory::getMysql();
// var_dump($db);
// if($db ===$db1){
// 	echo '是的OK';
// }else{
// 	echo "不是NO";
// }



 ?>