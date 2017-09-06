<?php

require "smarty/Smarty.class.php";

$smarty = new Smarty();
$smarty->template_dir = 'theme_tpl';
$smarty->compile_dir = 'runcache/admin';

$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

//开启缓存
$smarty->caching = true;
$smarty->cache_lifetime = 1;

if(!$smarty->isCached('test.html'))
{
    echo 'running database';

    $title = "这是标题";
    $content = "这里是内容………………";
    $desc = "这里是描述";
    //将变量赋值到模板
    $smarty->assign('title',$title);
    $smarty->assign('content',$content);
    $smarty->assign('desc',$desc);
}
//载入模板文件
$smarty->display('test.html');