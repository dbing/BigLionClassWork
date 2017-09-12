<?php
/**
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/8/30
 * Time: 22:24
 */

header("Content-type:text/html;charset=utf-8;");
require "MySql.class.php";
require "Upload.class.php";

$db = new MySql();
$up = new Upload();

$name = $_POST['name'];
$result = $up->uploadAll();

if($result)
{
	foreach ($result as $key => $value)
	{
		$sql = "INSERT INTO img (name,img) VALUES ('$name','$value')";
		$res = $db->insert($sql);
		if($res)
		{
			echo 'OK<br>';
		}
		else
		{
			echo 'no';
		}

	}
}
else
{
	echo $up->getError();
}




