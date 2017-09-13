<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/12
 * Time: 22:34
 */
require 'init.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'default';
if ($action == 'default')
{

}elseif ($action == 'checkLogin')
{
    //检测管理员信息
    $name = isset($_POST['admin_name']) ? trim($_POST['admin_name']) : '';
    $password = isset($_POST['password']) ? md5(trim($_POST['password'])) : '';
     $admin  =  new AdminModel();
     $info = $admin->checkLogin($name,$password);
     if ($info)
     {
         if ($info['status'])
         {
             error("您的账号 $name 已被锁定",'login.php');
         }
         $admin->updateLogin($info['admin_id']);
         setcookie('isLoginEd',true);
         success('登录成功','index.php');
     }else{
            error('登录失败');
     }
}elseif ($action == 'out')
{
    setcookie('isLoginEd',null,time()-1);
    success('退出成功','login.php');
}
$smarty->display('login.html');
?>