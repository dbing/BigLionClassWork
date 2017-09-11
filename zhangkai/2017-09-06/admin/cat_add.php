<?php
require 'init.php';
$catList = $db->select('cate');

$smarty->assign('catList',$catList);
$smarty->display('cat_add.html');


