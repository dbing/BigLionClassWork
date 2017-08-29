<?php 
error_reporting(E_ALL ^E_DEPRECATED);
header('content-type:text/html;charset=utf-8');
// 1.连接MySQL
$conn = mysql_connect('127.0.0.1','root','root');
if(!$conn)
{
	die(mysql_error());
}

// 2.选库
mysql_select_db('test') or die(mysql_error());

// 3.设置字符
mysql_query('set names utf8') or die(mysql_error());

// 4.SQL
$sql = "INSERT INTO student (user_name) VALUES ('bing')";
$result = mysql_query($sql);
var_dump($result);
                                                                                                                      
?>