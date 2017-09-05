<!-- 张志国 -->
<?php

require 'smarty/Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'runcache/admin/';
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';


// 开启缓存
$smarty->caching = true;
$smarty->cache_lifetime = 2;

if(!$smarty->isCached('text.html'))
{
    echo 'running database ';

    $title = '标题';
    $content= '心情很美丽！';
	$desc = '先写作业';

    // 将变量赋值到模板
    $smarty->assign('title',$title);
    $smarty->assign('con',$content);
    $smarty->assign('desc',$desc);
 }


// 载入视图模板文件
$smarty->display('text.html');


