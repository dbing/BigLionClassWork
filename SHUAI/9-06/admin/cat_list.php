<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $c分类展示
 * Date: 2017/9/9
 * Time: 10:08
 */
require 'init.php';
$cat = $db->select('category');
$smarty->assign('cat',$cat);
$smarty->display('cat_list.html');
?>