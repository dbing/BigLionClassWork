<?php 

 header("content-type:text/html;charset=utf-8");
   class footer
   {

         //定义属性
   		public $name='足球a';
   		protected $height ="20";
   		private $color ="block";
   		const CONTENT = '20';


         //方法
   		public function age()
   		{
   			echo "666";
   		}

   		public function __set($k,$v)
   		{
   			  $this->$k = $v;
   		}
   		public function __isset($parem)
   		{
   			return $this->$parem;
   		}
   		public function __unset($name)
   		{
   			unset($this->$name);
   		}
   }

   $are = new footer;
   $aa = clone $are;//克隆
   echo $aa->height = '2';
   echo isset($aa->height);
   unset($aa->color);
   echo $aa->color;
 ?>