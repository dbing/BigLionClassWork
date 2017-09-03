<?php
header("content-type:text/html;charset=utf-8");

/**
 * @author 张涛 2017/09/02
 * @param  数据库  
 * @return NULL
 */
require "Mysql.class.php";


$m = new Mysql;

$res = $m->add('user', $_POST);
if($res > 0)
{
	echo $res;
}else
{
	echo $m->getError();
}