<?php
require "MySql.class.php";
$db = new Mysql;

$user = $_POST['user'];
$pwd = $_POST['pwd'];
$id = $_POST['id'];

$sql = "update user set user='$user',pwd='$pwd' where id='$id'";
$res = $db->update($sql);
var_dump($res);
if($res === false)
{
    echo '修改失败';
}else
{
    echo '修改成功';
}
