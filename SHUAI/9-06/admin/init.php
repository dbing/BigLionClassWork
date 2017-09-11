<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 20:30
 */
//定义项目的路径
define('ROOT_PATH',str_replace('\\','/',dirname(__DIR__))); //根路径

//引入公共的函数库
require ROOT_PATH .'/common/Function.php';
//引入自动加载类
require ROOT_PATH .'/libs/loader.class.php';

spl_autoload_register('Loader::autoload');

//初始化模板引擎
$smarty = Factory::getSmarty();
//实例化mysql数据对象
$db = Factory::getMySql();
?>