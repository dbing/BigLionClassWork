<?php 
	calss Upload{
		private $error;
		public function uploadOne(){
			$name = $file['img']['name'];
			$tmp_name = $file['img']['tmp_name'];
			$error = $file['img']['error'];

			if($error == 0){
				$file = 'image/'.$name;
				$bool = move_uploaded_file($tmp_name, $file);
				if($bool){
					return $file;
				}else{
					$this->error = '错误';
					return false;
				}
			}
		} 

		public function getError(){
			return $this->error;
		}

	}








 ?>