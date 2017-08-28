<?php
require "MySql.class.php";
$db = new Mysql('localhost',3306,'root','shop');
$sql = "select * from bao";
$list = $db->getAll($sql);
var_dump($list);

var_dump($db->error);