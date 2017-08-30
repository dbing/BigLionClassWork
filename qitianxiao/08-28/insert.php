<?php 
$conn = mysql_connect('127.0.0.1','root','root') or die(mysql_error());

mysql_select_db("myblog") or die(mysql_error());

mysql_query("set names utf8") or die(mysql_error());

$sql = "INSERT INTO demo (user,pwd) VALUES('xiaoxiao','123')";

$res = mysql_query($sql);

var_dump($res);


 ?>