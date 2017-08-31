<?php 
header("Content-type:text/html;charset=utf-8;");

require "MySql.class.php";
require "Upload.class.php";

$db = new MySql();
$up = new Upload();
$result = $up->uploadOne($_FILES);

$name = $_POST['name'];
// var_dump($result);

if($result)
{

	$sql = "INSERT INTO photo (name,img) VALUES ('$imgname','$result')";
	$res = $db->insert($sql);
	var_dump($res);
}
else
{
	// 输出：错误消息
	echo $up->getError();
}









?>