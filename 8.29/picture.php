<?php 
 header("content-type:text/html;charset=utf-8"); 


 include("Img.class.php");


 $info = new p;
 $file = new img;
 $name = $_POST['name'];
 $arr = [];


 foreach ($_FILES['img'] as $key => $value) 
 {
 	 foreach ($value as $k => $v) 
 	 {
 	  	$arr[$k][$key] = $v;
 	 }
 }

 	$num = $file->picture($arr);
 	$are = [];
 	foreach ($num as $key => $value) 
 	{
 	   $are[] =  "insert into img(name,imgs) values('$name','$value')";
 	}
 	if($num)
 	{
	 		$demo = $info->insert($are);
	 		if($demo)
			{
	 			echo "<script>alert('成功');</script>";
	 		}
 	}
 	else
 	{
 		echo $file -> error;
 		break;
 	}
 
 ?>