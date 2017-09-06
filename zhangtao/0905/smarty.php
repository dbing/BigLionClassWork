<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/05
 * @param  smarty模板引擎  
 * @return NULL
 */

require 'smarty/Smarty.class.php';



$smarty = new Smarty;
$smarty->template_dir = 'theme'; //模板存放目录
$smarty->compile_dir = 'runtime/'.date('Y-m-d'); //编译缓存存放目录
$smarty->left_delimiter = '<<';   //左定界符
$smarty->right_delimiter = '>>';  //右定界符
$smarty->caching = true;	   //开启缓存
$smarty->cache_lifetime = 6; //缓存刷新时间
//如果缓存文件不存在
if(!$smarty->isCached('text.html'))
{
	echo 'DB';
	$title = '标题';
	$content = '内容';
	$smarty->assign('title', $title);
	$smarty->assign('content', $content);
}else
{
	echo '缓存';
}

$smarty->display('text.html');