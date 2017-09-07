<?php
/**
 * @author 张涛 2017/09/07
 * @param  相册添加
 */
require 'init.php';

//查询分类数据
$catList = $db->select('cat');
$smarty->assign('catList', $catList);
$smarty->display('photo_add.html');