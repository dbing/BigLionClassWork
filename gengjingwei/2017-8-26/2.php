<?php
//1.连接mysql
$conn=mysql_connect('localhost:3306','root','root');
if(!$conn){
    die(mysql_error());
}
//2.选库
mysql_select_db('test') or die(mysql_error());
//设置字符
mysql_query('set names utf8')or die(mysql_error());
//4.SQL
$sql = "INSERT INTO student (user,pwd) VALUES ('wei','123456')";
$res = mysql_query($sql);
if($res){
    echo "成功";
}
?>