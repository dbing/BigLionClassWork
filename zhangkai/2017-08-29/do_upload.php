<?php
require 'mysql.class.php';
require 'upload.class.php';

$db = new Mysql();
$up = new Upload();
$result = $up->uploadone($_FILES);
$imgname = $_POST['name'];
if($result)
{
    $files = './image'.$name;
    $sql = "insert into psd (username,pwd,sname,img) VALUES ('','','$imgname','$files')";
    $res = $db->insert($sql);
}
else
{
    echo "上传失败";
}