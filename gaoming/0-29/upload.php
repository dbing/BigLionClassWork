<?php 
require "MySql.calss.php";
require "Upload.calss.php";


$db = new MySql();
$up = new Upload();
$result = $up->uploadOne($_FILES);
var_dump($result);


$imgname = $_POST['imgname'];



if($result){

	$sql = "INSERT INTO phptp (name,img) VALUES ('$imgname','$file')";
	$res = $db->insert($sql);

}else{

	$this->getError();
}



























 ?>