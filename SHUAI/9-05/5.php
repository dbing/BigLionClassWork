<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $smarty基本语法和修饰器
 * Date: 2017/9/5
 * Time: 23:25
 */
require 'smarty/Smarty.class.php';
$smarty = new Smarty;
$res = array('name'=>'shuai','age'=>12);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$smarty->assign('page',$page);
$smarty->assign('res',$res);
$smarty->display('6.html');
?>