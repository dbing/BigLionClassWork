<?php
/**
 * @author 张涛 2017/09/08
 * @param  分类列表
 */
require 'init.php';
// 检测用户是否登录
checkLogin();
$catModel = new CatModel();

$catList = $catModel->select();

$smarty->assign('catList', $catList);
$smarty->display('cat_list.html');