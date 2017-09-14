<?php
defined('BIGLION') or die('Access denied :)_(:');
/**
 * @author 张涛 2017/09/07
 * @param  文件上传大小
 * @param  文件上传类型
 * @param  文件上传重命名
 * @param  文件上传目录
 * @return PathInfo
 */
class Upload {
	private $error;
	private $size = 5; //文件大小 默认M
	private $fileInfo = []; 
	private $rootPath = 'uploads';
	private $type = ['image/jpeg', 'image/gif', 'image/png'];

	//多文件上传
	public function uploadAll($file)
	{
		if(isset($file) && is_array($file))
		{
			$arr = [];
			foreach ($file as $key => $val) 
			{
				$arr[$key] = $this->uploadOne($val);
			}
			return $arr;
		}
		$this->error = '未检测到的多文件添加';
		return false;

	}

	//单文件上传
	public function uploadOne($file)
	{
		if(!isset($file))
		{
			$this->error = '没有文件被上传 或者 文件大小超过限制';
			return false;
		}
		$this->fileInfo = $file;

		// if(!$this->checkSize())
		// {
		// 	return false;
		// }
		if(!$this->checkType())
		{
			return false;
		}
		if($this->fileInfo['error'] == 0)
		{	
			$fileName = $this->checkName();//获取文件名
			//判断目录
			if(!$fileDir = $this->creatDir())
			{
				return false;
			}
			$filePath = $fileDir. '/' .$fileName;
			$bool = move_uploaded_file($this->fileInfo['tmp_name'], $filePath);
			if($bool)
			{	
				return $filePath;
			}else
			{
				switch ($this->fileInfo['error']) {
					case '1':
						$this->error = '文件大小超过服务器限制';
						break;
					case '2':
						$this->error = '文件大小超过表单限制';
						break;
					case '4':
						$this->error = '没有文件被上传';
						break;
					case '6':
						$this->error = '找不到临时文件夹';
						break;
					default:
						$this->error = '未知的错误信息,请检查您选择的文件';
						break;
				}
				return false;
			}
		}else
		{
			$this->error = '';
		}
	}
	/**
	 * 创建目录
	 */
	private function creatDir()
	{
		$dir = $this->rootPath .'/images/' . date('Y-m-d');
		if(!file_exists($dir))
		{
			if(!mkdir($dir, 0777, true))
			{
				$this->error = '创建目录失败';
				return false;
			}
		}
		return $dir;
	}

	/**
	 * 重命名文件
	 */
	private function checkName()
	{
		$fileType = substr($this->fileInfo['name'], strrpos($this->fileInfo['name'], '.'));
		$fileName = time().rand(100,999).$fileType; //新文件名
		return $fileName; //返回文件名
	}

	/**
	 * 检测文件类型
	 */
	public function checkType()
	{	
		if(!in_array($this->fileInfo['type'], $this->type))
		{
			$this->error = '文件类型有误';
			return false;
		}
		return true;
	}
	/**
	 * 魔术方法  文件大小
	 */
	public function __set($key, $val)
	{
		$this->$key = $val;
	}

	/**
	 * 判断文件大小
	 */
	private function checkSize()
	{
		//判断上传文件大小是否大于设置的大小
		if($this->fileInfo['size'][0] > ($this->size * 1024 *1024))
		{
			$this->error = '文件大小必须在'.$this->size.'M以内';
			return false;
		}
		return true;
	}

	//错误信息
	public function getError()
	{
		return $this->error;
	}

}
