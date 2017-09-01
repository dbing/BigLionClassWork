<?php 
error_reporting(E_ALL ^E_DEPRECATED);
header('content-type:text/html;charset=utf-8');

$conn = mysql_connect('127.0.0.1','root','root');
if(!$conn)
{
	die(mysql_error());
}
mysql_select_db('test') or die(mysql_error());
mysql_query('set names utf8') or die(mysql_error());

$sql = "INSERT INTO student (user_name) VALUES ('bing')";
$result = mysql_query($sql);
var_dump($result);
                                                                                                                      
?>