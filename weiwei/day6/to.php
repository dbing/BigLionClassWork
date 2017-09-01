<?php
 header("content-type:text/html;charset=utf-8");
include("MySql.class.php");
include("Upload.class.php");
$db = new MySql();
$up=new Upload();
$imgname=$_POST['name'];
$photos = array();
foreach ($_FILES['photo'] as $key => $value) {
       foreach ($value as $k => $v) {
       	$photos[$k][$key] = $v;
       }
}
$result = $up->uploadAll($photos);
if($result){
	foreach ($result as $key => $value) {

    $sql="insert into tupian(name,img) values('$imgname','$value')";
	$res=$db->insert($sql);
	if($res){
		echo "成功";
	}
	
	}

}else{
	echo $up->getError();
}




