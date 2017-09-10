<?php 
/*
 * Created by 
 * User : Zhao Yu
 */
  include("Shop.php");
  include("Mysql.class.php");
  $info = new Mysql;
  $data = $info->add("test",$_POST);
  if($data)
  {
  		echo "<script>alert('成功');location.href='show.php'</script>";
  }else
  {
		echo "<script>alert('失败');location.href='show.php'</script>";
  }
 ?>