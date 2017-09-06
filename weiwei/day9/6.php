<?php 
 header("content-type:text/html;charset=utf-8");
// error_reporting(E_ALL ^E_DEPRECATED);
// require 'DataBase.Interface.php';
// require 'Mysql.class.php';

class Mysql
{
	private function __construct(){

	}
}
$db = new Mysql();
$db1 =  new Mysql();
if($db ===$db1){
	echo '是的OK';
}else{
	echo "不是NO";
}

?>