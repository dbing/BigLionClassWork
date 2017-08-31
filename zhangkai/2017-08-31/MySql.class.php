<?php
class MySql
{
	public $error;
	public function __construct()
	{
        $res = mysql_connect('localhost:3306','root','123456');
        mysql_select_db('boke');
        mysql_query('set names utf8');
	}
//添加
	public function insert($sql)
	{
		$result = mysql_query($sql);
		return $result;
	}
}


