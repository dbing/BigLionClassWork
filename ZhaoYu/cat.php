<?php 
/*
	 name:Zhao Yu
	 hobby:吃饭睡觉打豆豆

 */
header("content-type:text/html;charset=utf-8");
   class Zoo{

   	   public $name;
   	   public $sum;
   	   public function __construct($name)
   	   {
   	   	   echo "2222";
   	   }

   	  private  function add($sum)
   	   {
   	   		echo "888";
   	   }
   }

     class zoolo extends Zoo
     {
     	 public function __construct($name)
   	   {
   	   	   parent::__construct($name);//都执行
   	   	   echo "子类 ";
   	   }

     public	function add($sum)
     	{
     		$this->sum = $sum;
     		echo "555";
     	}
     		 
     }
     $are = new zoolo("2");
     echo $are->add("666");
     //子类要跟父类名保持一致  参数个数一致
     //子类的权限不能大于父类的 父私有 子保护或公开 
     //子类的构造会把父类的覆盖掉  使用parent::可使用
     //final  修饰的类不能被继承  属性不能被继承  方法不能被重写
 ?>