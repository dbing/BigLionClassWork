<?php 
error_reporting(E_ALL ^E_DEPRECATED);

class MySql{
	public $error;

	public function __construct(){
		//连接MySQL
		$conn = mysql_connect('127.0.0.1','root','root');
		//选库
		mysql_select_db('test') or die(mysql_error());
		//设置字符
		mysql_query('set names utf8') or die(mysql_error());		
	}

	
	 //添加
	 
	public function insert($sql){

		$result = mysql_query($sql);
		return $result;
	}
		
		//查询

	public function getAll($sql){
		$result = mysql_query($sql);
		if($result){
			$list = array();
			while($row = mysql_fetch_assoc($result)){
				$list[] = $row;
			}return $list;
		}
		else{
			$this->error = mysql_error();
			return false;
		}
	}
}