<?php 
error_reporting(E_ALL ^E_DEPRECATED);
require "DataBase.Interface.php";
require "MySql.class.php";
$db = new MySql;
$data = $_POST;
$res = $db->add('bookes',$_POST);
if($res > 0)
{
	var_dump($res);
}
else
{
	echo $db->getError();

}
var_dump($res);
?>