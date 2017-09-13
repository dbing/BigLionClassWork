<?php
/**
 * @author 张涛 2017/09/07
 * @param  后台主页
 */

require 'init.php';
// 检测用户是否登录
checkLogin();

$smarty->display('index.html');  //后台主页