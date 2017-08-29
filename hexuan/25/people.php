<?php 
header("content-type:text/html;charset=utf-8");
  class people{
  	   public $name;
  	   public $age;
  	   public function Sort($user,$age)
  	   {
  	   	   $this->name =  $user;
  	   	   $this->age  =  $age;
  	   	   echo $this->name;
  	   }
  	   public function __construct()
  	   {
  	   	   echo "同学~";
  	   }
  	    public function __destruct()
  	   {
  	   	   echo "今年".$this->age;
  	   }
  }
	 	$dome =  new Man;
	 	$name = "小花花";
	 	$age = "12";
	 	$data = $dome->Sort($name,$age);
		echo($data);

 ?>