<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $展示
 * Date: 2017/9/5
 * Time: 23:14
 */
require 'Data.Interface.php';
require 'MySql.class.php';
require 'smarty/Smarty.class.php';
$mysql = new MySql;
//判断缓存是否存在
if ($smarty->isCached('4.html')){
    $res = $mysql->select('cai');
    $smarty = new Smarty;
    $smarty->assign('res',$res);
}

$smarty->display('4.html');
?>