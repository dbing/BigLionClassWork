<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $分类的添加
 * content : $content
 * Date: 2017/9/9
 * Time: 10:04
 */
require 'init.php';
//查询所有的分类
$cat = $db->select('category');
$smarty->assign('cat',$cat);
$smarty->display('cat_add.html');
?>