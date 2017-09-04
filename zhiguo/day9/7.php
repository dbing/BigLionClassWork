<!-- 张志国 -->
<?php
require '6.php';
class Factory{

	static function getMysql(){
		return Mysql::getInstance();
	}
}
$db=Factory::getMysql();
var_dump($db);
$db1=Factory::getMysql();
if($db===$db1){
	echo 'ok';
}else{
	echo 'no';
}