<?php 
 
  class img{
  		 private $file = array();
  		 private $size = 1;
  		 public  $error = "";
       //图片类型
  		 public  $type =array('image/jpeg','image/gif','image/png','image/jpg');

       public function picture($img)
       {
           if(isset($img) && is_array($img))
           {
              foreach ($img as $key => $value) {
                   $images[$key] = $this->img($value);
              }
              return $images;
           }
       }

        //文件大小
  		 public function img($img)
  		 {		
  		 		$this->file = $img;
  		 		if($this->file['size'] > $this->size*1024*1024 )
	  		 	{
	  		 		$this ->error = "文件过大";
	   	   			return false;
	  		 	}
	  		 	if(!in_array($this->file['type'],$this->type) )
	  		 	{
	  		 		$this ->error = "类型不正确";
	   	   			return false;
	  		 	}
          //文件类型
  		 		if($this->file['error'] == 0)
  		 		{
					  $file = $this->file['name'];
	    			$sub = strstr($file,".");/
	    			$time = rand(0,999).$sub;
	    			$url = "./images/".date("Y-m-d",time());
	    			if(!file_exists($url))
	    			{
	    				mkdir($url,777,true);
	    			}
	    			$link = $url."/".$time;
	    			move_uploaded_file($this->file['tmp_name'],$link);
	    			return $link;
  		 		}else
  		 		{	
  		 			//错误提示
  		 			switch ($this->file['error']) {
  		 				case '1':
	 				    $this->error = '文件太大了';
	 				    return false;
	 					break;
  		 				case '2':
  		 				$this->error = '发生错误，没有上传成功';
  		 				return false;
  		 			}
  		 		}
  		 		
  		 }


  }

 ?>