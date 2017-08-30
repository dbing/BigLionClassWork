<?php 
include("config.php");
  $new = new Mysql;
  $name = $_POST['name'];
  $pwd = $_POST['pwd'];
  $are = $new->insert($name,$pwd);
  if($are)
  {
  	 echo "<script>alert('成功');location.href='add.php'</script>";
  }
 ?>