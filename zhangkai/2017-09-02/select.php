<?php

require "DB.class.php";
require "Mysql.class.php";

//$db = new MySql;

$db = file_put_contents('db.txt');

$list = $obj -> select('boke','name like "%p%"');
echo $obj -> getError();
var_dump($list);
?>