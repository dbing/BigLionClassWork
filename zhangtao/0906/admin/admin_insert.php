<?php


require 'init.php';


$data = $_POST;
$data['admin_pwd'] = md5($data['admin_pwd']);
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