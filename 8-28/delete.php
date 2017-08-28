<?php 
include('Mysql.class.php');
$info = new Mysql;
$id = $_GET['id'];
$are = $info->delete($id);
if($are)
{
	echo "<script>alert('成功');location.href='show.php'</script>";
}
 ?>