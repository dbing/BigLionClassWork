<?php 

  class Mysql{

  		 public function __construct()
  		 {
  		 	 mysql_connect('127.0.0.1','root','419479');
  		 	 mysql_select_db("word");
  		 	 mysql_query("set names ut8");
  		 }

  		 public function insert($name,$pwd)
  		 {
  		  return mysql_query("insert into test(name,pwd) values('$name','$pwd')");
  		 }
  		 public function select($sel)
  		 {
  		 	 $res = mysql_query($sel);
  		 	 if($res)
  		 	 {
  		 	 	 while($data = mysql_fetch_assoc($res)){
  		 	 	 		$add[] = $data;
  		 	 	 }
  		 	 	  return $add;
  		 	 }
  		 }
  }

 ?>