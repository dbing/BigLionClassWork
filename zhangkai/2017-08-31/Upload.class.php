<?php

class Upload
{
	private $error;
	private $size = 5;	// 上传大小单位 M
	private $type = array('image/gif','image/jpeg');
	private $rootPath = 'images';
	private $fileInfo = array();

	public function uploadAll()
	{
		if(isset($_FILES) && is_array($_FILES))
		{
			if(count($_FILES)>0)
			{
				$result = array();
				foreach ($_FILES as $key => $value)
				{
					$result[$key] = $this->uploadOne($value);
				}
			}
			return $result;
		}
		return false;
	}

	public function uploadOne($file)
	{
		if(!isset($file))
		{
			$this->error = '没文件被上传';
			return false;
		}

		$this->fileInfo = $file;
		// 大小检测
		if(!$this->checkSize())
		{
			return false;
		}
		// 类型检测
		if(!$this->checkType())
		{
			return false;
		}

		if($this->fileInfo['error'] == 0)
		{
			$fileName = $this->createFileName();

			// 创建目录
			if(!$filePath = $this->createPath())
			{
				return false;
			}

			$destFile = $filePath.'/'.$fileName;

			$bool = move_uploaded_file($this->fileInfo['tmp_name'], $destFile);
			if($bool)
			{
				return $destFile;
			}
			else
			{
				$this->error = '移动错误';
				return false;
			}
		}
		else
		{
			switch ($this->fileInfo['error']) {
				case '1':
					$this->error = '大小上传的文件超过了服务器限制';
					break;
				case '2':
					$this->error = '大小超过了表单中限制';
					break;
				case '3':
					$this->error = '文件只有部分被上传';
					break;
				default:
					# code...
					break;
			}
			return false;
		}	
	}

	private function createPath()
	{
		$path = $this->rootPath.'/'.date('Y').'/'.date('m').'/'.date('d');
		// 创建
		if(!file_exists($path))
		{
			if(!mkdir($path,0777,true))
			{
				$this->error = '创建目录失败';
				return false;
			}
		}
		return $path;
	}

	private function createFileName()
	{
		$extension = substr($this->fileInfo['name'], strrpos($this->fileInfo['name'], '.'));
		$str = '132456444489fdjvhkdhfkdhs';
		$randLetter = substr(str_shuffle($str), -5);
		return time().rand(10000,99999).$randLetter.$extension;
	}

	private function checkSize()
	{
		if($this->fileInfo['size'] > $this->size*1024*1024)
		{
			$this->error = '文件上传大小不能超过1M';
			return false;
		}	
		return true;	
	}

	private function checkType()
	{
		if(!in_array($this->fileInfo['type'], $this->type))
		{
			$this->error = '文件类型不合法';
			return false;
		}
		return true;		
	}

	public function getError()
	{
		return $this->error;
	}
}


?>