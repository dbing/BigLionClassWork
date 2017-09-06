<?php

require "DB.class.php";
require "Mysql.class.php";

$data = $_POST;

$db = new MySql;
$result = $db->add('psd',$data);
if($result)
{
    echo "你注册好勒";
    header('refresh:2;url=list.php');
}
else
{
    echo "你注册有点失败";
}