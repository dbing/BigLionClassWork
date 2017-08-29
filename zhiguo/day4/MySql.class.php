<?php 


class MySql
{
	public $error;

	public function __construct()
	{
	
		@ mysql_connect('127.0.0.1','root','');
				
		@mysql_select_db('2017');
		
		mysql_query('set names utf8');		
	}


	public function insert($sql)
	{

		$result = mysql_query($sql);
		return $result;
	}

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

	public function getRow($sql)
	{
		$result = mysql_query($sql);
		if($result)
		{
			return mysql_fetch_assoc($result);
		}		
		else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	
	public function delete($sql)
	{
		if(mysql_query($sql))
		{
			return mysql_affected_rows();
		}
		else
		{

			$this->error = mysql_error();
			return false;
		}
	}


	public function update($sql)
	{
		$bool = mysql_query($sql);
		if($bool)
		{
			return mysql_affected_rows();
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}		
	}

}


