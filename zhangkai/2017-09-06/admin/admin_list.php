<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-11 0011
 * Time: 18:51
 */

require 'init.php';

$admin = new AdminModel;
$adminList = $admin->select();


$smarty->assign('adminList',$adminList);

$smarty->display('admin_list.html');
