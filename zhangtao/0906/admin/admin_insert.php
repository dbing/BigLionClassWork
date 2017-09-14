<?php


require 'init.php';
// 检测用户是否登录
checkLogin();

$data = $_POST;
$data['admin_name'] = trim($_POST['admin_name']);
$data['admin_pwd'] = md5(trim($data['admin_pwd']));
$data['create_time'] = time();

$admin = new AdminModel;
$res = $admin->insert($data);
if($res !== false)
{
	success('添加管理员成功', 'admin_list.php');
}else
{
	error('添加管理员失败', 'admin_add.php');
}