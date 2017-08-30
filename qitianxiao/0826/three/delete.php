<?php 
header("content-type:text/html;charset=utf-8;");
require "MySql.class.php";
$db = new MySql;
    $id = $_GET['id'];

    $sql = "DELETE FROM demo WHERE id = '$id'";

    $res = $db->delete($sql);

    if($res >= 0){
        echo "ok";
    }else{
    	echo $db->error;
    	echo 'no';
    }


 ?>