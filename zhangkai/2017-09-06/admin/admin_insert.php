<?php

require 'init.php';
$res = $_POST;

if($res['password'] != $res['res'])
{
    error('两次密码不一致','admin_add.php');
}
$res['password'] = md5($res['password']);
unset($res['res']);

$res['register_time'] = time();

$admin = new AdminModel;
$result = $admin->insert($res);

if($result !== false )
{
    success('添加成功','admin_list.php');
}
else
{
    error('添加失败','admin_add.php');
}
