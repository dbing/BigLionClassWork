<!-- 张志国 -->
<?php
require 'init.php';

// 查询所有分类

$catList = $db->select('category');

$smarty->assign('catList',$catList);
$smarty->display('cat_add.html');


