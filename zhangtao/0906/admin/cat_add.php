<?php
/**
 * @author 张涛 2017/09/08
 * @param  分类添加
 */
require 'init.php';

//查询所有分类
$catList = $db->select('cat', 'parent_id=0');
$smarty->assign('catList', $catList);
$smarty->display('cat_add.html');