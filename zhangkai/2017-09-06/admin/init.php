<?php

//定义项目路径
define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__)));

require ROOT_PATH."/common/function.php";

//自动加载类
require ROOT_PATH .'/libs/Load.class.php';
spl_autoload_register('Loader::autoload');
//初始化模板引擎
$smarty = Factory::getSmarty();

//实例化数据对象
$db = Factory::getMySql();


