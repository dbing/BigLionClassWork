<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $魔术方法里面自動加載
 * Date    : 2017/8/31 0031
 * Time    : 9:15
 */

//以前的方法以后不支持
//function __autoload($class)
//{
//    require ($class.'.class.php');
//}
function about($name)
{
    include $name.'.class.php';
}

//现在用的方法
spl_autoload_register('about');
$m = new Man;
var_dump($m);
?>