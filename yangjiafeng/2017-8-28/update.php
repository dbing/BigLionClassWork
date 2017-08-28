<?php 
require "MySql.class.php";
header("content-type:text/html;charset=utf-8");
$db = new MySql;

// var_dump($_POST);
$user = $_POST['name'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];


$sql = "UPDATE user SET name='$user',pwd='$pwd' WHERE id='$id'";
$res = $db->update($sql);
// var_dump($res);
if($res === false)
{
	echo '修改失败';
}
else
{
	echo '修改成功';
}

?>