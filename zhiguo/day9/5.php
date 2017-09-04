<!-- 张志国 -->
<?php
error_reporting(E_ALL ^E_DEPRECATED);
require 'MySql.class.php';
class Factory{
	static function getMysql(){
		return new Mysql();
	}
}
$db=Factory::getMysql();
var_dump($db);
$db1=Factory::getMysql();

if($db==$db1){
	echo 'ok';
}else{
	echo 'no';
}
