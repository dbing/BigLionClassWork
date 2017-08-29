<?php
require "insert.class.php";

$db = new Mysql;

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];

$sql = "update psd set pwd = '$pwd',username = '$username' WHERE id = '$id'";

$info = $db -> do_update($sql);

if($info === false)
{
    echo "修改失败";
}
else
{
    echo "修改成功";
}