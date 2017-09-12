<!-- 张志国 -->
<?php

require 'init.php';

$admin = new AdminModel;
$adminList = $admin->select();

$smarty->assign('adminList',$adminList);
$smarty->display('admin_list.html');
