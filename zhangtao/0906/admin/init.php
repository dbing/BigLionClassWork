<?php
/**
 * @author 张涛 2017/09/07
 * @param  引入类文件
 */
//定义项目路径
define('ROOT_PATH', str_replace('\\', '/', dirname(__DIR__)));		//根路径


require ROOT_PATH . '/libs/smarty/Smarty.class.php';
require ROOT_PATH . '/libs/Mysql.class.php';
require ROOT_PATH . '/libs/Factory.class.php';
require ROOT_PATH . '/libs/Upload.class.php';

// 初始化模板引擎
$smarty = Factory::getSmarty();

// 实例化Mysql数据库对象
$db = Factory::getMysql();
