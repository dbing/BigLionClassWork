<?php
header("content-type:text/html;charset=utf-8");
error_reporting(E_ALL ^E_DEPRECATED);
class DB{
	public $error;
	public function __construct($host='127.0.0.1', $port=3306, $u = 'root', $p = 'root', $db = 'seven', $charSet= "utf8"){
		mysql_connect($host.':'.$port, $u, $p);
		mysql_select_db($db);
		mysql_query("set names ".$charSet);
	}
	//添加
	public function add($sql){
		$res = mysql_query($sql);
		if(!$res){
			$this->error = mysql_error();
			return $res;
		}
	}
	//查询
	public function select($sql){
		$result = mysql_query($sql); //资源
		$data = [];
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	/**
	 * 删除
	 * @return  bool
	 */
	public function del($sql){
		return mysql_query($sql);
	}
	/**
	 * 查询单挑条
	 */
	public function getOne($sql){
		$res = mysql_query($sql);
		if($res){
			return mysql_fetch_assoc($res);
		}else{
			$this->error = mysql_error();
			return false;
		}
	}
	/**
	 * 修改
	 */
	public function save($sql){
		$res = mysql_query($sql);
		if($res){
			return true;
		}else{
			$this->error = mysql_error();
			return false;
		}
	}
}
$db = new DB;