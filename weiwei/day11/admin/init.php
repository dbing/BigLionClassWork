<?php
//定义项目路径
define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__)));


require ROOT_PATH."/libs/smarty/Smarty.class.php";

require ROOT_PATH."/libs/Database.class.php";

require ROOT_PATH."/libs/Factory.class.php";

require ROOT_PATH."/libs/Mysql.class.php";

require ROOT_PATH."/libs/Upload.class.php";
//初始化模板引擎
$smarty = Factory::getSmarty();

//实例化数据对象
$db = Factory::getMySql();

