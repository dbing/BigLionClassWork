<!-- 张志国 -->
<?php

class Mysql{
	private static $instance;
	private function __construct(){

	}
	static function getInstance(){
		if(Mysql::$instance instanceof self){
			return Mysql::$instance;
		}
		//echo 'one';
	    return 	Mysql::$instance=new mysql();
	} 
}
// $db=new Mysql;
// $db1=new Mysql;
// 
$db=Mysql::getInstance();
$db1=Mysql::getInstance();
//$db1= clone $db;
if($db===$db1){
	echo 'ok';
}else{
	echo 'No';
}