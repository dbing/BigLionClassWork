<?php
require "DB.class.php";
require "Mysql.class.php";
require "smarty/Smarty.class.php";

$db = new MySql;
$smarty = new Smarty;

$smarty->caching = true;
$smarty->template_dir = 'tpl';
if(!$smarty->is_cached('admin_list.html'))
{
    $list = $db -> select('psd');

    $smarty->assign('list',$list);
}

$smarty->display('admin_list.html');