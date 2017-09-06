<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/05
 * @param  smarty模板引擎 展示
 *         分离显示逻辑和程序代码
 *         PHP后端、Smarty前端模板
 *         增强PHP。并非取代
 *         快速开发和部署，快速和简单的维护
 *         语法简单易懂、灵活的自定义开发
 *         安全、免费、开源
 *         简单使用
 *         1.引入目录文件
 *         2.实例化Smarty类
 *         3.根据需要 配置模板目录、编译缓存目录、开启缓存、等
 * @return NULL
 */

require 'Mysql.class.php';
require 'smarty/Smarty.class.php';
$smarty = new Smarty;
$db = new Mysql;
$smarty->template_dir = 'theme'; //模板存放目录
$smarty->caching = true;
$smarty->cache_lifetime = 6; //缓存刷新时间
//判断缓存是否存在
if(!$smarty->isCached('list.html'))
{
	echo 'DB';
	$data = $db->select('user');
	$smarty->assign('data', $data);
}else
{
	echo 'cache';
}

$smarty->display('list.html');



?>