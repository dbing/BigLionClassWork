<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-07 0007
 * Time: 22:00
 */

require 'init.php';
$data = $_POST;
$upload = new Upload();
$upload->size= 10;

$path = $upload ->uploadOne($_FILES['photo_path']);

if(!$path)
{
    die($upload->getError());
}

$data['photo_path'] = $photo_path;
$data['add_time'] = time();

$res = $db->add('photo',$data);
if($res=== false)
{
    echo $db->getError();
    die('上传失败');
}
else
{
    die('上传成功');
}