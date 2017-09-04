<?php 
/*
 * Created by 
 * User : Zhao Yu
 */
	class Mysql implements Shop
	{

		 public $error;
		 public $id;
		 public function __construct()
		 {
		 	mysql_connect("127.0.0.1",'root','419479');
		 	mysql_select_db("yue");
		 	mysql_query("set names utf8");
		 }


		 //查询单条
		 public function getOne($table,$data)
		 {
 			 $where = "select * from `$table` where id = ".implode(",",array_values($data))."";
	  	 	 $are = mysql_query($where);
	  	 	 return mysql_fetch_assoc($are);
		 }


		 //查询
	  	 public function select($table,$data='1=1')
	  	 {
	  	 	 $where = "select * from `$table` where $data";
	  	 	 $are = mysql_query($where);
	  	 	 while ($man = mysql_fetch_assoc($are)) {
	  	 	 	   $zoo[] = $man;
	  	 	 }
	  	 	 return $zoo;
	  	 }


	  	 //修改 
	  	 public function save($table,$data)
	  	 {
	  	 	$this->id = $data['id'];//全局存储
	  	 	unset($data['id']);//删除
	  	 	foreach ($data as $key => $value) {
	  	 	 $are[] = "update `$table` set  $key = $value where id =". $this->id;
	  	 	}
	  	 	foreach ($are as $key => $value) {
	  	 	   $add =  mysql_query($value);
	  	 	}
	  	    return $add;
	  	 }


	  	 //删除
	  	 public function delete($table,$data)
	  	 {
	  	 	$are ="delete from $table where id = ".implode(",",array_values($data))."";
	  	 	$yes = mysql_query($are);
	  	 	if($yes)
	  	 	{
	  	 		return $yes;
	  	 	}else
	  	 	{
	  	 		$this->error = mysql_error();
	  			return false;
	  	 	}
	  	 }


	  	 // 添加
	  	 // 成功返回ID
	  	 public function add($table,$data)
	  	 {
	  	 	$inset = "insert into `$table`(".implode(",",array_keys($data)).") values("."'".implode("','",array_values($data))."'".")";
	  		$are = mysql_query($inset);
	  		if($are)
	  		{
	  			return mysql_insert_id();
	  		}else
	  		{
	  			$this->error = mysql_error();
	  			return false;
	  		}
	  	 }

	}


 ?>