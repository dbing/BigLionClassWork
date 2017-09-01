<?php 
error_reporting(E_ALL ^E_DEPRECATED);

class MySql
{
	public $error;

	public function __construct($host='localhost',$port=3306,$user='root',$pwd='root',$dbName='test',$charSet='utf8')
	{
		// 1.连接MySQL
		$conn = mysql_connect($host.':'.$port,$user,$pwd);
		if(!$conn)
		{
			die(mysql_error());
		}
		// 2.选库
		mysql_select_db($dbName) or die(mysql_error());
		// 3.设置字符
		mysql_query('set names '.$charSet) or die(mysql_error());		
	}

	/**
	 * 新增数据
	 *
	 * @author BING
	 * @param  string  $sql 插入的SQL
	 * @return bool      
	 */
	public function insert($sql)
	{

		$result = mysql_query($sql);
		return $result;
	}

	/**
	 * 查询多行
	 *
	 * @author BING
	 * @return array
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
	 *
	 * @author BING
	 * @param  string  $sql SQL语句
	 * @return bool      
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
	 *
	 * @author BING
	 * @param  string  $sql SQL语句
	 * @return bool/int      
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


