<?php
require "Mysql.class.php";
require "DB.class.php";

$db = new mysql;
var_dump($db);
//序列化
file_put_contents('db.txt.txt',serialize_fix($db));

//var_dump($_POST);
//
$res = $db->add('boke',$_POST);
if($res > 0)
{
    var_dump($res);
}
else
{
    $db->getError();
}
var_dump($res);

?>