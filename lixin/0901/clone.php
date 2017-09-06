<?php 
 header("content-type:text/html;charset=utf-8");
   class Clones{

   		public $name='lixin';
   		protected $sex ="nan";
   		private $info ="666";
   		const CONTENT = '20';
   		public function age()
   		{
   			echo "666";
   		}
   		//获取私有的值
   		public function __get($get)
   		{
   			echo "xx属性:".$get;
   			return $this->$get;
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
   $data = new Clones;
   $xx = clone $data;
   echo $xx->sex = '33';
   echo "<br>";
   echo isset($xx->sex);
   unset($xx->info);
   echo $xx->info;
 ?>