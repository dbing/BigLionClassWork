<?php 
require "MySql.class.php";

$db = new MySql('localhost',3306,'root','','');

$sql = "SELECT * FROM aa";
$list = $db->getAll($sql);

var_dump($list);

var_dump($db->error);