<?php
//基本语法
//变量修饰器
//内置函数
require 'smarty/Smarty.class.php'; //引入smarty类

$smarty = new Smarty;
$smarty->template_dir = 'theme'; //模板存放目录
// $smarty->debugging = true; //开启调节模式
$info = ['name' => 'tao', 'age' => 23];

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$smarty->assign('page', $page);
$smarty->assign('info', $info);
$smarty->assign('num', 1);
$smarty->assign('num2', 2);

// $smarty->display('info.html');

$infoHtml = $smarty->fetch('info.html');
echo $infoHtml;