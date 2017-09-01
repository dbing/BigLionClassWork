<?php 
class Upload
{
	private $error;

	public function uploadOne($file)
	{
		var_dump($file);
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
				$this->error = '移动错误';
				return false;
			}
		}	
	}

	/**
	 * 获取上传错误消息
	 *
	 * @author BING
	 * @return string 错误消息
	 */
	public function getError()
	{
		return $this->error;
	}
}


?>