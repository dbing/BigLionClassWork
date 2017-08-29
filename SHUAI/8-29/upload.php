<?php
/**
 * SHUAI
 * 文件上传
 * 19:36
 **/
require "MySql.class.php";
require "Upload.class.php";
$db = new MySql();
$up = new Upload();
$result = $up->uploadOne($_FILES);
if($result)
{
	//入库
		$sql = "INSERT INTO cai (img) VALUES('$result')";
		$res = $db->insert($sql);

}else
{
echo $up->error;
}




// die;

// $img = $_FILES['img']['name'];
// $tmp = $_FILES['img']['tmp_name'];
// $error = $_FILES['img']['error'];
// if($error == 0)
// {
// 	$file = 'images/'.$img;
// 	$bool = move_uploaded_file($tmp, $file);
// 	if($bool)
// 	{
// 		//入库
// 		$sql = "INSERT INTO cai (img) VALUES('$file')";
// 		$res = $db->insert($sql);

// 	}else{
// 		//上传失败
// 	}
//  }
//  else{
//  	die('上传失败');
//  }
?>