<?php 
require "MySql.class.php";

$db = new MySql('localhost',3306,'root','root');

$sql = "SELECT * FROM test";
$list = $db->getAll($sql);

//var_dump($list);

//var_dump($db->error);