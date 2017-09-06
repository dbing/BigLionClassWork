<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/05
 * @param  smarty模板引擎 添加 
 * @return NULL
 */

require 'smarty/Smarty.class.php';

$smarty = new Smarty;
$smarty->template_dir = 'theme'; //模板存放目录

$smarty->display('add.html');