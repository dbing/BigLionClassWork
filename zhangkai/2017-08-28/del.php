<?php
require "insert.class.php";

$db = new Mysql;

$id = $_GET['id'];

$sql = "delete from psd where id = '$id'";

$res = mysql_query($sql);
if($res)
{
    echo "删除成功";

}
else
{
    echo "删除失败";

}
?>