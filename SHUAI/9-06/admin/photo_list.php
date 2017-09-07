<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 20:22
 */
require 'init.php';
$res = $db->select('photo');
$smarty->assign('res',$res);
$smarty->display('photo_list.html')
?>