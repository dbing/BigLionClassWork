<?php
header("content-type:text/html;charset=utf-8");
mysql_connect('127.0.0.1:3306', 'root', 'root');
mysql_select_db('seven');
mysql_query('set names utf8');
$fileName = $_POST['filename'];  //图片名称

require 'Upload.class.php';  //引入文件上传类
$up = new Upload;

$array = [];
foreach($_FILES['file'] as $key => $val){
	foreach($val as $k => $v){
		$array[$k][$key] = $v;
	}
}

$arr = $up->uploadAll($array);
foreach ($arr as $key => $val) {
	$sql = "insert into file(filename, file) value('$fileName', '$val')";
	$res = mysql_query($sql);	
}

if($res){
	echo '上传成功';
}else{
	echo $up->getError();
}
