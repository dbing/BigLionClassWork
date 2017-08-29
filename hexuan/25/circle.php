<?php 
class c{
		public $circle;
		//圆
		public function cir($gets)
		{
			return $this->circle * $gets * $gets;
		}
		public function __construct($circle)
		{
			 $this->circle = $circle;
		}
}
	$circle = "3.1415";
	$data = new c($circle);
	$gets = "3";
	echo $data->cir($gets);
 ?>