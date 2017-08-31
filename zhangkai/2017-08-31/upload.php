<?php 
header("Content-type:text/html;charset=utf-8;");

require "MySql.class.php";
require "Upload.class.php";

$db = new MySql();
$up = new Upload();

$name = $_POST['sname'];
$result = $up->uploadAll();

if($result)
{
	foreach ($result as $key => $value)
	{
		$sql = "insert into psd (sname,img) values ('$name','$value')";
		$data = $db->insert($sql);
		if($data)
		{
			echo '成功';
		}
		else
		{
			echo '失败';
		}

	}
}
else
    {
    echo "shibai";
    }
?>