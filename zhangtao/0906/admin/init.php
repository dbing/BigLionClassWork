<?php
/**
 * @author 张涛 2017/09/08
 * @param  引入类文件
 */
//定义项目路径
define('ROOT_PATH', str_replace('\\', '/', dirname(__DIR__)));		//根路径

require ROOT_PATH . '/common/Function.php'; //引入公共函数库


//引入自动加载类
require ROOT_PATH . '/libs/Autoload.class.php';
spl_autoload_register('Autoload::autoloads');


$smarty = Factory::getSmarty();// 初始化模板引擎

$db = Factory::getMysql();// 实例化Mysql数据库对象

// 初始化系统配置
$setting = Factory::getSetting();
$smarty->assign('setting', $setting);
