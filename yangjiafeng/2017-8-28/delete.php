<?php 
require "MySql.class.php"pe:text/html;charset=utf-8");
$db = new MySql;;
header("content-ty

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id'";
// echo $sql;
$res = $db->delete($sql);
// var_dump($res);
if($res === false)
{
	// echo $db->error;
	echo '删除失败';
}
else
	echo '删除成功
{';

}


?>
