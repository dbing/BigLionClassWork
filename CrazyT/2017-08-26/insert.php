<?php 
error_reporting(E_ALL ^E_DEPRECATED);

//连接MySQL
$con = mysql_connect('localhost:3306','root','');
if(!$con)
{
	die(mysql_error());
}

//选库
mysql_select_db('test') or die(mysql_error());

//设置字符
mysql_query('set names utf8') or die(mysql_error());

//写sql
$sql = "INSERT INTO student (user,pwd) VALUES ('zhangsan','123456')";
$res = mysql_query($sql);
var_dump($res);

?>