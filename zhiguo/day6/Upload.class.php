<!-- 张志国 -->
<?php 
class Upload
{
	private $error;
	private $size=1;
	private $type=array('image/png','image/jpg','image/jpeg');
	private $fileInfo=array();
	private $rootPath = 'images';

	public function uploadAll($array)
	{	echo '<pre>';
	var_dump($array);
		if(isset($array) && is_array($array))
		{
			if(count($array)>0)
			{
				$result = array();
				foreach ($array as $key => $value)
				{
					

					$result[$key] = $this->doUp($value);
					
				}
			}
			return $result;
		}
		$this->error = '未检测到多张图片';
		return false;
	}




	public function doUp($file)
	{


		//检查文件是否上传
		if(!isset($file)){
			$this->error='没有文件被上传';
			return false;
		}

	
		// 获取文件信息
	
		$this->fileInfo=$file;
		//判断类型
		if(!$this->checkType()){

			return false;
		}


		//判断文件大小
		if(!$this->checkSize()){

			return false;
		}

		
		if($this->fileInfo['error'] == 0)
		{
			$file=$this->checkFileName();
          
			// 创建目录
			if(!$filePath = $this->createPath())
			{
				return false;
			}
			$destFile=$filePath.'/'.$file;
			
			$bool = move_uploaded_file($this->fileInfo['tmp_name'], $destFile);
			
			if($bool)
			{
				return $file;
			}
			else
			{
				$this->error = '移动错误';
				return false;
			}
		}else{
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
					
					break;
			}
			return false;


		}	
	}




	//生成一个图片目录
	private function createPath(){

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






	//生成一个图片名字
	private function checkFileName(){

	    $extension = substr($this->fileInfo['name'], strrpos($this->fileInfo['name'], '.'));
		$str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randLetter = substr(str_shuffle($str), -5);
		$file= time().rand(10000,99999).$randLetter.$extension;
		
		return $file;


	}




	//文件上传大小
	private function checkSize(){

		if($this->fileInfo['size']>$this->size*1024*1024){

			$this->error='图片太大，请换低于1M的图片';
			return false;

		}
		return ture;
	}
	//文件上传类型
	private function checkType(){

		if(!in_array($this->fileInfo['type'],$this->type)){

			$this->error='图片类型不符';
			return false;

		}
		return ture;
	}
	//报错提醒
	public function getError()
	{
		return $this->error;
	}
}


?>