<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 23:12
 */
require 'init.php';
//检测用户是否登录
checkLoginEd();
$smarty->display('photo_recycle.html');
?>