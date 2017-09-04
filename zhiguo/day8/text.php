<!-- 张志国 -->
<?php
include('MySql.class.php');

$db=new MySql;

// $data['name']='小明';
// $data['pwd']='123';
// $data['img']='';
$table='a';
$data=$db->add($table,$_POST);
if($data)
{
	echo "<script> alert('成功');location.href='list.php'</script>";
}