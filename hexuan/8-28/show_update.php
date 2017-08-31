<?php
include("config.php");
$info = new Mysql;
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];
$true = $info->show_update($name,$pwd,$id);
if($true)
{
	echo "<script>alert('成功');location.href='show.php'</script>";
}

 ?>