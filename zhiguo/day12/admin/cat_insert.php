<!-- 张志国 -->
<?php
require 'init.php';

$data = $_POST;

$catModel = new CatModel();
$result = $catModel->insert($data);


if($result === false)
{
    echo $db->getError();
    error('分类添加失败','cat_add.php');
}
else
{
    success('分类添加成功','cat_list.php');
}

