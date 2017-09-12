<!-- 张志国 -->
<?php

require 'init.php';
$data = $_POST;

if($data['password'] != $data['repassword'])
{
    error('两次密码不一致','admin_add.php');
}
$data['password'] = md5($data['password']);
unset($data['repassword']);

$data['register_time'] = time();
//p($data);


$admin = new AdminModel;
$result = $admin->insert($data);

if($result !== false )
{
    success('管理员添加成功','admin_list.php');
}
else
{
    error('管理员添加失败','admin_add.php');
}
