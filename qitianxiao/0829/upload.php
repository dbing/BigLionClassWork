<?php 
/*
@author XIAO
文件上传
 */
require "Mysql.class.php";
require "Upload.class.php";

$db = new Mysql();
$up = new Upload();
$res = $up->uploadone($_FILES);


$imgname = $_POST['name'];

if($res){
	$sql = "INSERT INTO img (name,img_path) VALUES ('$imgname','$res')";
	$res = $db->insert($sql);
	var_dump($res);	
}else{
	echo $this->getError();
}















 ?>