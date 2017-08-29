<?php
/*
删除
 */
require "MySql.class.php";
$db = new MySql;
$id = $_GET['id'];
$sql = "DELETE FROM cai  where id = '$id'";
$res = $db->delete($sql);
if($res == true){
	echo 'OK';
}else{
	
	echo '失败';
}
?>