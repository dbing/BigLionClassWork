<?php
error_reporting(E_ALL ^E_DEPRECATED);
//连接mysql
$con = mysql_connect('localhost:3306','root','');
if(!$con){
	die(mysql_error());
}
//选库
mysql_select_db('gooe') or die(mysql_error());

//设置字符
mysql_query('set names utf8') or die(mysql_error());

//sql
$sql = "INSERT INTO cai (name,url) VALUSE ('san','12')";
$res = mysql_query($sql); 
var_dump($res);die;
?>