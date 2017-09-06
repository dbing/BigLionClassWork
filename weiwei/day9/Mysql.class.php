<?php 
require 'DataBase.Interface.php';
class MySql implements Database
{
	private $error = '';
	public function __construct()
	{
		$conn = mysql_connect('localhost:3306','root','root');
		if(!$conn)
		{
			die(mysql_error());
		}
		mysql_select_db('test');
		mysql_query('set names utf8');
	}
	public function add($table,$data)
	{
		$sql = "INSERT INTO $table";
		$sql .= '('.implode(',', array_keys($data)).')';
		$sql .= ' VALUES ';
		$sql .= "('".implode("','", array_values($data))."')";
		$result = mysql_query($sql);
		if($result)
		{
			return mysql_insert_id();
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}
	}
	public function delete($table,$where)
	{

	}
	public function save($table,$where)
	{
	}
	public function find($table,$where=1)
	{
		echo 'IS OK';
	}
	public function select($table,$where=1)
	{
		$sql = "SELECT * FROM $table WHERE $where";
		$result = mysql_query($sql);
		if($result)
		{
			while ($row = mysql_fetch_assoc($result))
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
	public function getField($table,$column,$where=1){
	}
	public function getError()
	{
		return $this->error;
	}

}
?>