<?php 
require "MySql.class.php";
$db = new MySql;

// var_dump($_POST);
$user_name = $_POST['user_name'];
$user_class = $_POST['user_class'];
$uid = $_POST['uid'];


$sql = "UPDATE student SET user_name='$user_name',user_class='$user_class' WHERE uid='$uid'";
$res = $db->update($sql);
// var_dump($res);
header('content-type:text/html;charset =utf-8');
if($res === false)
{
	echo '修改失败';
}
else
{
	echo '修改成功';
}

?>