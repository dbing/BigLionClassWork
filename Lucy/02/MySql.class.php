<?php
header('content-type:text/html;charset=utf-8');
error_reporting(E_ALL ^E_DEPRECATED);
class MySql
{
	public $error;

	public function __construct()
	{
		$conn = mysql_connect('127.0.0.1','root','root');
		if(!$conn)
		{
			die(mysql_error());
		}
		mysql_select_db('test') or die(mysql_error());
		mysql_query('set names utf8') or die(mysql_error());
	}

	//增
	public function insert($sql)
	{
		$result = mysql_query($sql);
		return $result;
	}

	//查询多条
	public function getAll($sql)
	{
		$result = mysql_query($sql);
		if($result)
		{
			$list = array();
			while($row = mysql_fetch_assoc($result))
			{
				$list[] = $row;
			}
			return $list;
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}
	}


}


