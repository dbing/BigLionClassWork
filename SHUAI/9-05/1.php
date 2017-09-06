<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $smarty
 * Date: 2017/9/5
 * Time: 22:24
 */
$title = '纪帅飞';
$content = '这是帅';
require 'smarty/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir = 'theme_tpl';
$smarty->compile_dir = 'runcache/admin/';
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$smarty->caching = true;
$smarty->cache_lifetime = 60;
//将变量赋值到模板
$smarty->assign('title',$title);
$smarty->assign('content',$content);
$smarty->display('2.html');
?>