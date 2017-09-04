<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $命名空间
 * Date    : 2017/9/4 0004
 * Time    : 19:07
 */
require '2.php';
require '3.php';
\home\test();
echo '<br>';
\admin\test();
echo '<hr>';
echo \admin\md5(1234);
echo '<br>';
echo md5(1234);
echo '<hr>';
echo '<br>';
function test()
{
    echo __FILE__;
}
\test();
?>