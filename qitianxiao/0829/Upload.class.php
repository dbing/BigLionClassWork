<?php 
class Upload{
	protected $error;
	public function uploadone($file){
		$name    = $file['img']['name'];
		$tmpname = $file['img']['tmp_name'];
		$error   = $file['img']['error'];
		if($error == 0){
			$file= './img/'.$name;
			$res = move_uploaded_file($tmpname,$file);
			if($res){
				return $file;
			}else{
				$this->error = '上传失败';
				return false;
			}
		}
	}

	public function getError(){
		return $this->error;
	}
}

 ?>