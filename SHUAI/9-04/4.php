<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $工厂模式 和单例
 * Date    : 2017/9/4 0004
 * Time    : 19:33
 */
//error_reporting(E_ALL ^E_DEPRECATED);
//require 'Data.Interface.php';
//require  'MySql.class.php';
require '5.php';
class Mai
{
    static function getA()
    {
        return  Man::get();
    }
}
//工厂模式
$db1 = Mai::getA();
$db2 = Mai::getA();
if($db1 === $db2){
    echo '11';
}else{
    echo 'NO';
}
?>