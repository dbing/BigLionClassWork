<?php 
header("Content-type:text/html;charset=utf-8;");

require "MySql.class.php";
require "Up.php";

$db = new MySql();
$up = new Up();
$result = $up->uploadOne($_FILES['img']);

$imgname = $_POST['imgname'];
//var_dump($result); die;

if($result)
{
	/**
	 * 需要
	 *
	 * 成功返回：上传后的路径
	 * 失败返回：1.FALSE
	 * 			 2.可以获取到错误消息
	 */

	// 入库
	$sql = "INSERT INTO photo (name,img) VALUES ('$imgname','$result')";
	$res = $db->insert($sql);
	var_dump($res);
}
else
{
	// 输出：错误消息
	echo $up->getError();
}









?>