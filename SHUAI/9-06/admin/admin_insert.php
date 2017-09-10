<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $管理员的添加
 * Date: 2017/9/9
 * Time: 11:36
 */
require 'init.php';
$data = $_POST;
if ($data['password'] != $data['repassword'])
{
    error('两次密码不一样','admin_add.php');
}
$data['password'] = md5($data['password']);
unset($data['repassword']);
$admin = new AdminModel();
$res =$admin->add($data);
if($res)
{
    success('添加成功','admin_list.php');
}else{
    echo $db->getError();

    error('添加失败','admin_add.php');
}
?>