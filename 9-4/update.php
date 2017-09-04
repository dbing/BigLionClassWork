<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
  header("content-type:text/html;charset=utf-8");
  include("Shop.php");
  include("Mysql.class.php");
   $info = new Mysql;
   $are = $info ->save("user",$_POST);
   if($are)
   {
   		echo "<script>alert('修改成功');location.href='show.php'</script>";
   }else
   {
   	  echo $info->error();
   }

 ?>