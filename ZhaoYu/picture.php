<?php 
/*
	 name:Zhao Yu
	 hobby:吃饭睡觉打豆豆

 */
header("content-type:text/html;charset=utf-8"); 
 include("Img.class.php");
 include("File.class.php");
 $info = new Man;
 $file = new File;
 $name = $_POST['name'];
 $fil = $file->img("img");
 if($fil)
 {
	 $are = $info->insert($name,$fil);
	 if($are)
	 {
	 	echo "<script>alert('成功');</script>";
	 }
 }else
 {
 		echo $file -> error;die;
 }
 
 ?>