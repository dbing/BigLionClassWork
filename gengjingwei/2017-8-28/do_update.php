<?php
require "Mysql.class.php";

$db = new Mysql;

$user = $_POST['user'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];

$sql = "update student set pwd = '$pwd',user = '$user' WHERE id = '$id'";

$info = $db -> do_update($sql);

if($info === false)
{
    echo "修改失败";
}
else
{
    echo "修改成功";
}