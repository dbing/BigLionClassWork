<?php 

/*
	 name:Zhao Yu
	 hobby:吃饭睡觉打豆豆

 */
   class Man{

   			//链接数据库
   	     public function __construct()
   	     {
   	     	 mysql_connect("127.0.0.1","root","419479");
   	     	 mysql_select_db("word");
   	     	 mysql_query("set names utf8");
   	     }


           //添加
           public function insert($name,$img)
           {
              return mysql_query("insert into img(name,imgs) values('$name','$img')");
           }
   }

 ?>