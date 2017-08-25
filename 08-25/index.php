<?php 
header("content-type:text/html;charset=utf-8");
  class Man{
  	   public $name;
  	   public $age;
  	   public function Sort($user,$age)
  	   {
  	   	   $this->name =  $user;
  	   	   $this->age  =  $age;
  	   	   echo $this->name;
  	   }
  	   //构造函数
  	   public function __construct()
  	   {
  	   	   echo "尊敬的~";
  	   }
  	   //析构函数
  	    public function __destruct()
  	   {
  	   	   echo " 马上要".$this->age;
  	   }
  }
	 	$dome =  new Man;
	 	$name = "小明同志";
	 	$age = "下学了";
	 	$data = $dome->Sort($name,$age);
		echo($data);

 ?>