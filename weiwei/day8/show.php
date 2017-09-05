<?php 
error_reporting(E_ALL ^E_DEPRECATED);
require "DataBase.Interface.php";
require "MySql.class.php";
$db = new MySql;
$show = $obj->select('bookes');
var_dump($show);
?>