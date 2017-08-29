<?php 
/*
	 name:Zhao Yu
	 hobby:吃饭睡觉打豆豆

 */
header("content-type:text/html;charset=utf-8"); 
include("Img.class.php");
 $info = new Man;
 $name = $_POST['name'];
 $file = $info->img("img");
 $are = $info->insert($name,$file);
 if($are)
 {
 	echo "<script>alert('成功');</script>";
 }
 ?>