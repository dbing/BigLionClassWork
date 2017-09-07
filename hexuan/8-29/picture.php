<?php 


 include("Img.class.php");


 $info = new p;
 $file = new img;
 $img = $_POST['img'];
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
 	   $are[] =  "insert into img(img,imgs) values('$img','$value')";
 	}
 	if($num)
 	{
	 		$demo = $info->insert($are);
	 		if($demo)
			{
	 			echo "<script>alert('上传成功');</script>";
	 		}
 	}
 	else
 	{
 		echo $file -> error;
 		break;
 	}
 
 ?>