<?php
/**
 * @author 张涛 2017/09/08
 * @param  分类添加
 */
require 'init.php';
$catModel = new CatModel(); //引入model
// 检测用户是否登录
checkLogin();

$post = $_POST;
$res = $catModel->insert($post);

if($res)
{
	success('添加分类成功', 'cat_list.php');
}
else
{
	die($this->getError());
	error('添加分类失败', 'cat_add.php');
}