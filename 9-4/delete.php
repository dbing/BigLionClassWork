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
   $are = $info ->delete("user",$_GET);
   if($are)
   {
   	  echo "<script>alert('成功');location.href='show.php'</script>";
   }else{

   }

 ?>