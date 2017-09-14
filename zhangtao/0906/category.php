<?php
/**
 * @author 张涛 2017/09/13
 * @param  相册，根据分类读取对应的相片信息
 */

require 'initalize.php';

$cid = (int)$_GET['cid'];

// 读取分类
$cat = new CatModel();
$list = $cat->select();
$catList = getCatChildLevel($list);

// 读取相片信息
$photo = new PhotoModel();
$photoList = $photo->select("cat_id=$cid");

$smarty->assign('catList', $catList);
$smarty->assign('photoList', $photoList);
$smarty->display('category.html');

