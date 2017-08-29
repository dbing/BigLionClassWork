<?php 
require "MySql.class.php";
$db = new MySql;

// var_dump($_POST);
$name = $_POST['name'];
$url = $_POST['url'];
$id = $_POST['id'];


$sql = "UPDATE cai SET name='$name',url='$url' WHERE id='$id'";
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