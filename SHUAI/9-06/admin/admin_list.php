<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $管理员的展示
 * Date: 2017/9/9
 * Time: 11:33
 */
require 'init.php';
//检测用户是否登录
checkLoginEd();
$admin = new AdminModel();
$admin = $admin->select();
$smarty->assign('admin',$admin);
$smarty->display('admin_list.html');
?>