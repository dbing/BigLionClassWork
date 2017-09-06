<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/05
 * @param  smarty模板引擎 做添加 
 * @return NULL
 */

require 'Mysql.class.php';

$db = new Mysql;

$res = $db->add('user', $_POST);
if($res > 0)
{
	echo '添加成功';
	header('refresh:2;url=list.php');
}else
{
	echo '添加失败';
}