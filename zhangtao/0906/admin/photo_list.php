<?php
/**
 * @author 张涛 2017/09/07
 * @param  相册列表
 */
require 'init.php';
// 检测用户是否登录
checkLogin();

$photoList = $db->select('photo');
$smarty->assign('photoList', $photoList);
$smarty->display('photo_list.html');