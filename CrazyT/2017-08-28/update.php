<?php 
require "MySql.class.php";
$db = new MySql;
$user = $_POST['user'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];
$sql = "UPDATE student SET user='$user',pwd='$pwd' WHERE id='$id'";
$res = $db->update($sql);
if($res === false)
{
	echo '修改失败';
}
else
{
	echo '修改成功';
}

?>