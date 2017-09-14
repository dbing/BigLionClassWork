<?php
header('content-type:text/html;charset=utf-8');
/**
 * 2017/09/13
 * @param 初始化页面
 */
define('ROOT_PATH', str_replace('\\', '/', __DIR__));		//根路径

require ROOT_PATH . '/common/Function.php'; //引入公共函数库

//引入自动加载类
require ROOT_PATH . '/libs/Autoload.class.php';
spl_autoload_register('Autoload::autoloads');

//初始化db
$db = Factory::getMysql();

//初始化模板引擎
$smarty = Factory::getSmarty('home');
