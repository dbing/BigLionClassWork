<?php 

  class Mysql{

  		 public function __construct()
  		 {
  		 	 mysql_connect('127.0.0.1','root','419479');
  		 	 mysql_select_db("word");
  		 	 mysql_query("set names ut8");
  		 }
       //添加
  		 public function insert($name,$pwd)
  		 {
  		  return mysql_query("insert into test(name,pwd) values('$name','$pwd')");
  		 }
       //查询
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
       //删除语句
       public function delete($id)
       {
          return mysql_query("delete from test where id =$id");
       }

       //修改查询单条
       public function getsel($select)
       {
           $are = mysql_query($select);
           return mysql_fetch_assoc($are);

       }
       //修改语句 
       public function show_update($name,$pwd,$id)
       {
         return mysql_query("update TEST set name='$name',pwd='$pwd' where id= $id ");
       }
  }

 ?>