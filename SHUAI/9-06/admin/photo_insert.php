<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 23:30
 */
require 'init.php';
//检测用户是否登录
checkLoginEd();
$data = $_POST;

//上传图片
$up = new Upload();
$up->size = $GLOBALS['sysconf']['UPLOAD_MAXSIZE'];
$photo_path = $up->uploadOne($_FILES['photo_path']);
if(!$photo_path)
{
    die($up->getError());
}
$data['photo_path'] = $photo_path;
$data['add_time'] = time();

$res = $db->add('photo',$data);
if($res)
{
    success('添加成功','cat_list.php');
}else{
    echo $db->getError();

    error('添加失败','cat_list.php');
}
?>