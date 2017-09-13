<?php
/**
 * @author 张涛 2017/09/07
 * @param  执行分类添加
 */
require 'init.php';
// 检测用户是否登录
checkLogin();

$post = $_POST;

//上传相片
$up = new Upload();
$up->size = $GLOBALS['setting']['UPLOAD_MAXSIZE']; //修改限制图片大小为8M内

$photoPath = $up->uploadOne($_FILES['photo_path']);
if(!$photoPath)
{
	die($up->getError());
}

$post['photo_path'] = $photoPath;
$post['add_time'] = time();

$res = $db->add('photo', $post);
if($res > 0)
{
	$smarty->display('photo_list.html');
}
else
{
	echo $db->getError();
}