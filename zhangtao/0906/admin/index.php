<?php
/**
 * @author 张涛 2017/09/07
 * @param  后台主页
 */

require 'init.php';
// 检测用户是否登录
checkLogin();

//统计数据
$admin = new AdminModel();
$count['admin'] = $admin->count(); //计算用户总数量

$photo = new PhotoModel();
$count['photo'] = $photo->count(); //计算相片数量

$smarty->assign('count', $count);
$smarty->display('index.html');  //后台主页