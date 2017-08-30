<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $对象的富值
 * Date    : 2017/8/30 0030
 * Time    : 14:35
 */
header("content-type:text/html;charset=utf-8");
class Min
{
    public $name = '小帅';
}
$cat = new Min;
$dog = $cat;
//$dog->name = '大帅';
$pig = $dog;
$pig->name = '大帅';
echo $cat->name;
echo '<hr>';
$num =  3;
$adc =& $num;
$abc = 2;
var_dump($abc);
?>