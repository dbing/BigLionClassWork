<?php
/**
 * @author 张涛 2017/09/12
 * @param  登录
 */

require 'init.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'default';
if($action == 'default')
{
	$smarty->display('login.html'); //登录页面
}
elseif($action == 'checkLogined')
{
	//检测管理员登录信息
	$name = isset($_POST['admin_name']) ? $_POST['admin_name'] : '';
	$pwd = isset($_POST['admin_pwd']) ? md5(trim($_POST['admin_pwd'])) : '';
	$admin = new AdminModel();

	$info = $admin->checkLogin($name, $pwd);
	if($info)
	{
		if($info['status'] == 1)
		{
			error('您的管理员账号'.$name.'已被锁定,请联系超级管理员', 'login.php');
		}
		setcookie('adminInfo', true);
		$admin->updateLogin($info['admin_id']); //修改登录时间以及用户ip

		success('管理员' .$name. '登录成功', 'index.php');
	}
	else
	{
		error('登录失败');
	}
}
elseif($action == 'out')
{
	setcookie('adminInfo', null, time()-1);
	success('退出成功', 'login.php');
}
