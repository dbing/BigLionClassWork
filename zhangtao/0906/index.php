<?php
/**
 * 2017/09/13
 * @param 前台主页
 */

require 'initalize.php';
// 读取分类
$cat = new CatModel();
$list = $cat->select();
$catList = getCatChildLevel($list);

// 读取相片信息
$photo = new PhotoModel();
$photoList = $photo->select();


$smarty->assign('catList', $catList);
$smarty->assign('photoList', $photoList);
$smarty->display('index.html');