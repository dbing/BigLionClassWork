<?php 
error_reporting(E_ALL ^E_DEPRECATED);

//连接MySQL
$con = mysql_connect('127.0.0.1','root','root');
if(!$con){
	die(mysql_error());
}

//选库
mysql_select_db('test') or die(mysql_error());

//设置字符
mysql_query('set names utf8') or die(mysql_error());

//写sql
$sql = "INSERT INTO student (name,pwd) VALUES ('admin','123456')";
$result = mysql_query($sql);
var_dump($result);





?>