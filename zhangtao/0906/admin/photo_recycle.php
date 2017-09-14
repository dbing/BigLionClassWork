<?php
/**
 * @author 张涛 2017/09/07
 * @param  相册回收站
 */
require 'init.php';
// 检测用户是否登录
checkLogin();

$smarty->display('photo_recycle.html');