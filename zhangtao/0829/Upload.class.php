<?php
/**
 * @author 张涛
 * @param  文件上传类
 * @return 文件Path
 */
class Upload {
	protected $error;
	public function uploadOne($file){
		$filePath = './Upload/'. $file['name']; //原文件名称  替换成新路径
		$tmpName = $file['tmp_name']; //原路径
		$error = $file['error']; //提交后的返回信息 bool
		if($error == 0)
		{	
			$bool = move_uploaded_file($tmpName, $filePath);
			if($bool)
			{	
				return $filePath;
			}else
			{
				$this->error = '移动文件失败';
				return false;
			}
		}

	}

	public function getError(){
		return $this->error;
	}

}
