<!-- 张志国 -->
<?php

require 'smarty/Smarty.class.php';

$smarty = new Smarty;
//var_dump($smarty);
$smarty->template_dir = 'tpl';
$smarty->debugging = true;

$info = array('name'=>'三毛','age'=>1);

$page = isset($_GET['page']) ? $_GET['page'] : 1;

//var_dump($_SERVER);
$smarty->assign('page',$page);
$smarty->assign('info',$info);
$smarty->assign('sex','母');
$smarty->assign('num1',1);
$smarty->assign('num2',1);

$smarty->display('info.html');

// $info_html = $smarty->fetch('info.html');
// echo $info_html;