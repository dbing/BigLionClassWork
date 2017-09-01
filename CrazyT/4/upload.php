<?php
/**
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/8/30
 * Time: 22:24
 */
header("Content-type:text/html;charset=utf-8;");
require "MySql.class.php";
require "Upload.class.php";

$db = new MySql();
$up = new Upload();
$res = $up->uploadOne($_FILES);

$name = $_POST['name'];

if($res)
{
    $sql = "INSERT INTO img (name,img) VALUES ('$name','$res')";
    $res = $db->insert($sql);

}
else
{
    echo $up->getError();
}