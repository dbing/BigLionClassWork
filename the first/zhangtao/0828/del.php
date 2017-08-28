<?php
header("content-type:text/html;charset=utf-8");
require "1.php";
$id = $_GET['id'];
$sql = "delete from user where id='$id'";
$res = $db->del($sql);
if($res){
	echo "删除成功<a href='show.php'>查看</a>";
}else{
	echo $db->error;
	echo '删除失败';
}