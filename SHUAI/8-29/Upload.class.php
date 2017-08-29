<?php
/**
 * SHUAI
 * 分装文件
 * 19:56
 **/
class Upload
{
	protected $error;
   public function uploadOne($fil)
   {
     //获取文件
    $img = $fil['img']['name'];
    $tmp = $fil['img']['tmp_name'];
    $error = $fil['img']['error'];
    if($error == 0)
    {
	$file = 'images/'.$img;
	$bool = move_uploaded_file($tmp, $file);
	if($bool)
	{
       return $file
	}else{
		$this->error = '错误';
       return false;
	}
   }
}
//错误消息
public function getError()
{
	return $this->error;
}
}
?>