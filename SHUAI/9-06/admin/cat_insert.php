<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $分类添加
 * Date: 2017/9/9
 * Time: 10:23
 */
require 'init.php';
//检测用户是否登录
checkLoginEd();
$data = $_POST;
$catModel = new CategoryModel();
$res = $catModel->add($data);
if($res)
{
    success('添加成功','cat_list.php');
}else{
    echo $db->getError();

   error('分类添加失败','cat_list.php');
}
?>