<?php 
require "MySql.class.php";
    header("content-type:text/html;charset=utf-8;");


    $db = new MySql;

	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$id = $_POST['id'];


	$sql = "UPDATE demo SET user='$user',pwd='$pwd' WHERE id='$id'";
    echo $sql;
    $res = $db->updata($sql);

    if($res){
    	echo "ok";
    }else{
    	echo "no";
    }



 ?>