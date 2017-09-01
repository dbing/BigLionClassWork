<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
 header("content-type:text/html;charset=utf-8");
   class Clones{

   		public $name='小凡';
   		protected $sex ="女";
   		private $info ="888";
   		const CONTENT = '20';
   		public function age()
   		{
   			echo "666";
   		}
   		//获取私有的值
   		public function __get($get)
   		{
   			echo "什么属性:".$get;
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
   $are = new Clones;
   $aa = clone $are;//克隆
   echo $aa->sex = '33';//设置私有的属性值__set
   echo "<br>";
   echo isset($aa->sex);//查看私有值是否有值  有:1;否:0;
   unset($aa->info);//删除一个私有的属性值
   echo $aa->info;
 ?>