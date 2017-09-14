<!-- 张志国 -->
<?php

// 定义项目路径
 define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__)));       // 根路径


require ROOT_PATH .'/libs/smarty/Smarty.class.php';
require ROOT_PATH .'/libs/Say.class.php';
require ROOT_PATH .'/libs/MySql.class.php';
require ROOT_PATH .'/libs/Factory.class.php';
require ROOT_PATH .'/libs/Upload.class.php';

// 引入公共函数库
require ROOT_PATH .'/common/Function.php';

// 引入自动加载类
require ROOT_PATH .'/libs/Loader.class.php';
spl_autoload_register('Loader::autoload');

// 初始化模板引擎
$smarty = Factory::getSmarty();

// 实例化MySql数据库对象
$db = Factory::getMySql();


