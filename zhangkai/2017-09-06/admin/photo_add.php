<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-06 0006
 * Time: 18:52
 */

require "init.php";

$cat_list = $db ->select('cate');

$smarty->assign('cart_list',$cat_list);

$smarty -> display('photo_add.html');