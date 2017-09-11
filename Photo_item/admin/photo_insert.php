<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Ps: 添加图片
 */  
  header("content-type:text/html;charset=utf-8");
  include("init.php");
  $imgs = $img->img($_FILES['photo_path']);
  if($imgs)
  {
  		  $_POST['photo_time'] = time();
		  $_POST['photo_path'] = $imgs;
		  $TUR = $db->add("picture",$_POST);
		  if($TUR)
		  {
		  	echo "<script>alert('上传成功');location.href='photo_list.php'</script>";
		  }else
		  {
			echo "<script>alert('上传失败');location.href='photo_create.php'</script>";
		  }
  }else
  {

		echo $img->error;die;
  }
 

 ?>