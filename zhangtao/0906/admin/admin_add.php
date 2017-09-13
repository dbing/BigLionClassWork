<?php
/**
 * @author 张涛 2017/09/10
 * @param  管理员添加
 */
require 'init.php';
// 检测用户是否登录
checkLogin();

$smarty->display('admin_add.html');