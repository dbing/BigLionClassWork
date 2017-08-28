<?php 
error_reporting(E_ALL ^E_DEPRECATED);

class MySql
{
	public $error;

	public function __construct($host='localhost',$port=3306,$user='root',$pwd='',$dbName='test',$charSet='utf8')
	{
		//连裤
		$conn = mysql_connect($host.':'.$port,$user,$pwd);
		if(!$conn)
		{
			die(mysql_error());
		}
		//选库
		mysql_select_db($dbName) or die(mysql_error());
		//设置字符
		mysql_query('set names '.$charSet) or die(mysql_error());		
	}

	/**
	 * 新增数据
	 */
	public function insert($sql)
	{

		$result = mysql_query($sql);
		return $result;
	}

	/**
	 * 查询多行
	 */
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

	/**
	 * 删除
	 */
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

	/**
	 * 修改
	 */
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


