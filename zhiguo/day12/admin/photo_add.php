
<!-- 张志国 -->
<?php


require 'init.php';

// 查询分类
$cat_list = $db->select('category');


// 赋值
$smarty->assign('cat_list',$cat_list);
$smarty->display('photo_add.html');