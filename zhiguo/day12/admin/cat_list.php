<!-- 张志国 -->
<?php

require 'init.php';

$catModel = new CatModel();
$catList = $catModel->select();

$smarty->assign('catList',$catList);
$smarty->display('cat_list.html');