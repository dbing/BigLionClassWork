<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $查询所有数据
 * Date    : 2017/9/1 0001
 * Time    : 20:57
 */
error_reporting(E_ALL ^E_DEPRECATED);
require "Data.Interface.php";
require "MySql.class.php";
$db = new MySql;
$list = $db->select('admin');
var_dump($list);
?>