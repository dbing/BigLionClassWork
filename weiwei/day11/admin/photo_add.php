<?php
require "init.php";

$cat_list = $db ->select('cate');

$smarty->assign('cart_list',$cat_list);

$smarty -> display('photo_add.html');