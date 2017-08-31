<!-- 张志国 -->
<?php

$imgname=$_POST['imgName'];



include("MySql.class.php");
include("Upload.class.php");

$db = new MySql();
$up=new Upload();
$array='';
echo '<pre>';
foreach ($_FILES as $key => $value) {
	foreach ($value as $k => $v) {
		
		foreach ($v as $ke => $val) {
			$array[$ke][$k]=$val;
		}
	}
}


$result = $up->uploadAll($array);

if($result){
	foreach ($result as $key => $value)
	{
		$sql="insert into aa values(NULL,'$imgname','$value')";
		$res=$db->insert($sql);
		if($res){

			echo '成功';

		}else{

		echo '失败了';

	}
  }
}else{
	echo $up->getError();
}




