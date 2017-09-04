<?php
header("content-type:text/html;charset=utf-8");
error_reporting(E_ALL ^E_DEPRECATED);
/**
 * @author 张涛 2017/09/04
 * @param  数据库  
 * @return NULL
 */
require "DB.class.php";
class Mysql implements DB
{
	static private $instance;
	private $error = ''; //错误消息
	//防止重写
	final private function __construct()
	{
		mysql_connect('127.0.0.1', 'root', 'root');
		mysql_select_db('seven');
		mysql_query('set names utf8');
	}
	static function getInstance()
	{
		//如果是本类的self，返回
		if(self::$instance instanceof self)
		{
			return self::$instance;
		}else
		{
			return self::$instance = new self();
		}
	}

	/**
	 * @param  添加
	 * @return int/bool 成功返回自增id，失败返回bool 
	 */
	public function add($table, $data)
	{
		$sql = "INSERT INTO $table";
		$sql .= '(' .implode(',', array_keys($data)). ')';
		$sql .= ' VALUES ';
		$sql .= "('" .implode("','", array_values($data)). "')";
		$res = mysql_query($sql);
		if($res){
			return mysql_insert_id();
		}else{
			$this->error = mysql_error();
			return false;
		}

	}

	/**
	 * @param  删除数据
	 * @return int/bool 成功返回影响行数，失败返回bool 
	 */
	public function delete($table, $where)
	{
		$sql = "DELETE FROM $table where $where";
		$res = mysql_query($sql);
		if($res)
		{
			return true;
		}else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	/**
	 * @param  修改数据
	 * @return int/bool 成功返回影响行数，失败返回bool 
	 */
	public function update($table, $data, $where)
	{
		$sql = "UPDATE $table SET $data WHERE $where";
		$res = mysql_query($sql);
		if($res)
		{
			return true;
		}else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	/**
	 * @param  查询单行
	 * @return array 
	 */
	public function find($table, $where = 1)
	{
		$sql = "SELECT * FROM $table WHERE $where";
		if($sql)
		{
			$res = mysql_query($sql);
			$row = mysql_fetch_assoc($res);
			return $row;
		}else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	/**
	 * @param  查询所有
	 * @return array 
	 */
	public function select($table, $where = 1)
	{
		$sql = "SELECT * FROM $table WHERE $where";
		if($sql)
		{
			$res = mysql_query($sql);
			while($row = mysql_fetch_assoc($res))
			{
				$arr[] = $row;
			}
			return $arr;
		}else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	/**
	 * @param  获取单个字段值
	 * @return string 
	 */
	public function getField($table, $column, $where = 1)
	{
		$sql = "SELECT $column FROM $table WHERE $where";
		$res = mysql_query($sql);
		if($res)
		{
			while($row = mysql_fetch_row($res))
			{
				$arr[] = $row;
			}
			return $arr;
		}else
		{
			$this->error = mysql_error();
			return false;
		}

	}

	public function getError()
	{
		return $this->error;
	}
	//防止被克隆
	private function __clone()
	{
		$this->error =  '不能被克隆的对象';
		return false;
	}
}
