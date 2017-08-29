<?php
require "MySql.class.php";
$db = new Mysql;
$id = $_GET['id'];

$sql = "delete from user where id ='$id'";
$res = $db->delete($sql);
var_dump($res);
if($res>=0)
{
    echo '删除成功';
}else
{
    echo '删除失败';
}
