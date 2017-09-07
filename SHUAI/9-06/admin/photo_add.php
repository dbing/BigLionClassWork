<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 20:15
 */
require 'init.php';
//查询分类
$cat=$db->select('category');
$smarty->assign('cat',$cat);
$smarty->display('photo_add.html')
?>