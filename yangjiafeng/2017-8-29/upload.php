<?php
//杨嘉峰
//2017年8月29日23:26:23
//phpinfo();

var_dump($_FILES);

var_dump($_POST);

$name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
$error = $_FILES['img']['error'];

if(error==0)
{
    $bool = move_uploaded_file($tmp_name,$name);
    var_dump($bool);
}



?>