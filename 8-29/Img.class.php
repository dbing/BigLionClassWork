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

   	     public function img($img)
   	     {
    			$file = $_FILES[$img]['name'];//提取照片中的name
    			$sub = strstr($file,".");//截取后缀名
    			$time = time().$sub;
    			$url = "./imgs/".date("Y-m-d",time());
    			if(!file_exists($url))//判断是负有文件夹
    			{
    				mkdir($url,777,true);//创建
    			}
    			$link = $url."/".$time;//地址
    			move_uploaded_file($_FILES['img']['tmp_name'],$link);//移动
    			return $link;
   	     }
           //添加
           public function insert($name,$img)
           {
              return mysql_query("insert into img(name,imgs) values('$name','$img')");
           }
   }

 ?>