<?php 
header("content-type:text/html;charset=utf-8");
  class people{
  	   public $name;
  	   public $content;
  	   public function p($user,$content)
  	   {
  	   	   $this->name =  $user;
  	   	   $this->content  =  $content;
  	   	   echo $this->name;
  	   }
  	   //构造函数
  	   public function __construct()
  	   {
  	   	   echo "同学";
  	   }
  	   //析构函数
  	    public function __destruct()
  	   {
  	   	   echo " 马上要".$this->content;
  	   }
  }
	 	$dome =  new people;
	 	$name = "小明同志";
	 	$content = "考试了";
	 	$data = $dome->p($name,$content);
		echo($data);

 ?>