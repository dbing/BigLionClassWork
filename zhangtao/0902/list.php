<?php
header("content-type:text/html;charset=utf-8");

/**
 * @author 张涛 2017/09/02
 * @param  数据库  
 * @return NULL
 */
require "Mysql.class.php";


$m = new Mysql;

// $r = serialize($m);

print_r($r);die;

$data = $m->getField('user', 'username');
