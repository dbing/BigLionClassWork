<?php
require "Mysql.class.php";

$db = new Mysql;

$id = $_GET['id'];

$sql = "delete from student where id = '$id'";

$res = mysql_query($sql);
if($res)
{
    echo "<script> alert('删除成功');location.href='Mysql.class.php'</script>";

}
else
{
   echo "<script> alert('删除失败');location.href='Mysql.class.php'</script>";

}
?>