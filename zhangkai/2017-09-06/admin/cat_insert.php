<?php
require 'init.php';

$data = $_POST;
$catModel = new CatModel();
$result = $catModel->insert($data);
if($result === false)
{
    error('添加失败','cat_add.php');
}
else
{
    success('添加成功','cat_list.php');
}

