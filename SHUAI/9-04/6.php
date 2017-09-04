<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $使用模式
 * Date    : 2017/9/4 0004
 * Time    : 20:11
 */
error_reporting(E_ALL ^E_DEPRECATED);
require 'Data.Interface.php';
require  'MySql.class.php';
$db1 = MySql::gteA();
$db2 = MySql::gteA();
if($db1 === $db2)
{
    echo 'Yse';
}else{
    echo 'NO';
}
?>