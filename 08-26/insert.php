<?php 
include("Mysql.class.php");
  $info = new Mysql;
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  $are = $info->insert($name,$pwd);
  if($are)
  {
  	 echo "<script>alert('成功');location.href='add.php'</script>";
  }
 ?>