<!-- 张志国 -->
<?php


require 'init.php';

$data = $_POST;

// 上传相片
$up = new Upload();

$up->size=5;
$photo_path = $up->doUp($_FILES['photo_path']);

if(!$photo_path)
{
    die($up->getError());
}

$data['photo_path'] = $photo_path['photo_path'];
$data['add_time'] = time();

$result = $db->add('photos',$data);
if($result === false)
{
    echo $db->getError();
    die('上传相片失败');
}
else
{
    die('上传相片成功');
}

