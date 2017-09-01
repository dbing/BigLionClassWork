<?php
header('content-type:text/html;charset = utf-8');
require "MySql.class.php";
$db = new MySql;

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE uid='$id'";
// echo $sql;
$res = $db->delete($sql);
// var_dump($res);
if($res === false)
{
	// echo $db->error;
	echo '删除Fail';
}
else
{
	echo '删除OK';

}


?>

