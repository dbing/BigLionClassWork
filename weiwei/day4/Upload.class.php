<?php 
class Upload
{
	private $error;

	public function doUp($file)
	{
	
		// 获取文件信息
		$name = $file['img']['name'];
		$tmp_name = $file['img']['tmp_name'];
		$error = $file['img']['error'];	
		if($error == 0)
		{
			$file = 'images/'.$name;
			$bool = move_uploaded_file($tmp_name, $file);
			
			if($bool)
			{
				return $file;
			}
			else
			{
				$this->error = '移动失败';
				return false;
			}
		}	
	}

	
	public function getError()
	{
		return $this->error;
	}
}


?>