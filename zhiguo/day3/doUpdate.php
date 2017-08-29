<?php
require "Mysql.class.php";

$db = new Mysql;

$user = $_POST['user'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];

$sql = "update student set pwd = '$pwd',user = '$user' WHERE id = '$id'";

$info = $db -> do_update($sql);

if($info)
{
   echo "<script> alert('修改成功');location.href='Mysql.class.php'</script>";
}
else
{
   echo "<script> alert('修改失败');location.href='Mysql.class.php'</script>";
}