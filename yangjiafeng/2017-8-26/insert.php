<?php 
	
	error_reporting(E_ALL ^E_DEPRECATED);
	
	//连接数据库
	$conn = mysql_connect('www.study.com:3306','root','root');
	if(!$conn)
	{
		die(mysql_error('连接数据库失败'));
	}

	//选择数据库
	mysql_select_db('loser') or die(mysql_error('没有这个数据库'));

	//设置字符集
	mysql_query('set names utf8') or die(mysql_error('设置字符集失败'));

	//sql
	$sql = "INSERT INTO user (name,pwd) VALUE ('zhangsna','123')";
	$res = mysql_query($sql);
	var_dump($res);



 ?>