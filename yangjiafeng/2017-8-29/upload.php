<?php
//杨嘉峰
//2017年8月29日23:26:23
//phpinfo();
header("content-type:text/html;charset=utf-8");
require "MySql.class.php";
require "Upload.class.php";

$db = new MySql();
$up = new Upload();
$result = $up->uploadOne($_FILES);

$imgname = $_POST['imgname'];
//var_dump($result);

if($result)
{
    // 入库
    $sql = "INSERT INTO photo (name,img) VALUES ('$imgname','$result')";
    $res = $db->insert($sql);
//    var_dump($res);
}
else
{
    // 输出错误消息
    echo $up->getError();
}









?>



?>