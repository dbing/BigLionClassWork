<?php

require "smarty/Smarty.class.php";

$smarty = new Smarty;

$smarty->template_dir = 'tpl';

$smarty->debugging = true;

$info = array('sname'=>'kai','pwd'=>155);

$page = isset($_GET['page'])?$_GET['page']:1;


$smarty->assign('page',$page);
$smarty->assign('info',$info);
$smarty->assign('sex','男');

$smarty->display('info.html');
$info = $smarty->fetch('info.html');
echo $info;