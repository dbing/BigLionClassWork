<?php
header("content-type:text/html;charset=utf-8");
mysql_connect('127.0.0.1:3306', 'root', 'root');
mysql_select_db('seven');
mysql_query('set names utf8');

require 'Upload.class.php';  //引入文件上传类
$up = new Upload;
$filePath = $up->uploadOne($_FILES['file']); //返回文件路径
var_dump($filePath);
$fileName = $_POST['filename'];  //图片名称

// $sql = "insert into file(filename, file) value('$fileName', '$filePath')";
// $res = mysql_query($sql);
if($filePath){
	echo '上传成功';
}else{
	echo $up->getError();
}
