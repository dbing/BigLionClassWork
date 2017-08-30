<?php 
/*
	 name:Zhao Yu
	 hobby:吃喝玩乐

 */ 
  class File{
  		 private $file = array();
  		 private $size = 2;
  		 public  $error = "";
  		 public  $type =array('image/jpeg','image/gif','image/png','image/jpg');
  		 public function img($img)
  		 {		
  		 	    //判断大小
  		 		$this->file = $_FILES[$img];
  		 		if($this->file['size'] > $this->size*1024*1024 )
	  		 	{
	  		 		$this ->error = "文件过大";
	   	   			return false;
	  		 	}
	  		 	//判断类型
	  		 	if(!in_array($this->file['type'],$this->type) )
	  		 	{
	  		 		$this ->error = "类型不正确";
	   	   			return false;
	  		 	}

  		 		if($this->file['error'] == 0)
  		 		{
					$file = $this->file['name'];//提取照片中的name
	    			$sub = strstr($file,".");//截取后缀名
	    			$time = time().$sub;
	    			$url = "./imgs/".date("Y-m-d",time());
	    			if(!file_exists($url))//判断是负有文件夹
	    			{
	    				mkdir($url,777,true);//创建
	    			}
	    			$link = $url."/".$time;//地址
	    			move_uploaded_file($this->file['tmp_name'],$link);//移动
	    			return $link;
  		 		}else
  		 		{	
  		 			//错误提示
  		 			switch ($this->file['error']) {
  		 				case '1':
	 				    $this->error = '文件超过最大值';
	 				    return false;
	 					break;
  		 				case '2':
  		 				$this->error = '文件超过表单';
  		 				return false;
  		 				break;
  		 				case '4':
  		 				$this->error = '没有文件上传成功';
  		 				return false;
  		 			}
  		 		}
  		 		
  		 }


  }

 ?>