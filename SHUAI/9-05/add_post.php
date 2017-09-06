<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $添加
 * Date: 2017/9/5
 * Time: 23:09
 */
require 'Data.Interface.php';
require 'MySql.class.php';
$data = $_POST;
$mysql = new MySql;
$res = $mysql->add('cai',$data);
if ($res)
{
 header('2;url=list.php');
}else{
    die('失败');
}
?>