<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */ 
header("content-type:text/html;charset=utf-8"); 
 include("Img.class.php");
 include("File.class.php");
 $info = new Man;
 $file = new File;
 $name = $_POST['name'];
 $arr = [];
 //遍历数组根据下标放一起
 foreach ($_FILES['img'] as $key => $value) {
 	 foreach ($value as $k => $v) {
 	  	$arr[$k][$key] = $v;
 	 }
 }

 	//调用类
 	$num = $file->picture($arr);
 	$are = [];
 	//拼接添加语句
 	foreach ($num as $key => $value) {
 	   $are[] =  "insert into img(name,imgs) values('$name','$value')";
 	}
 if($num)
 {
	 $demo = $info->insert($are);
	 if($demo)
	 {
	 	echo "<script>alert('成功');</script>";
	 }
 }else
 {
 		echo $file -> error;die;
 }
 
 ?>