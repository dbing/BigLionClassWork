<?php
header("content-type:text/html;charset=utf-8");
require "1.php";
$id = $_POST['id'];
$username = $_POST['username'];
$userpwd = $_POST['userpwd'];

$sql = "update user set username='$username',userpwd='$userpwd' where id='$id'";
$res = $db->save($sql);

if($res){
	echo '修改成功<a href="show.php">点击查看</a>';
}else{
	echo $db->error();
	echo '修改失败';
}
?>