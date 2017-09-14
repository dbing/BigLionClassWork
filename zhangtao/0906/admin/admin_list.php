<?php
/**
 * @author 张涛 2017/09/10
 * @param  管理员列表
 */
require 'init.php';
// 检测用户是否登录
checkLogin();

$admin = new AdminModel;
$adminList = $admin->select();
$smarty->assign('adminList', $adminList);
$smarty->display('admin_list.html');