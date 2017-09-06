<?php 
 header("content-type:text/html;charset=utf-8");
   class a{

   		public $big='12';
   		protected $height ="20cm";
   		private $info ="888";
   		const CONTENT = '20';
   		public function color()
   		{
   			echo "白色";
   		}
   		}
   		public function __set($k,$v)
   		{
   			  $this->$k = $v;
   		}
   		public function __isset($parem)
   		{
   			return $this->$parem;
   		}
   		public function __unset($big)
   		{
   			unset($this->$big);
   		}
   }
   $aa = new a;
   $aa = clone $aa;
   print_r $aa->height = '2cm';
   echo "<br>";
   print_r isset($aa->height);
   unset($aa->info);
   print_r $aa->info;
 ?>