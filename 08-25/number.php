<?php 
class dome{
		public $PI;
		//圆
		public function sumo($gets)
		{
			return $this->PI * $gets * $gets;
		}
		public function __construct($PI)
		{
			 $this->PI = $PI;
		}
}
	$PI = "3.1415";
	$data = new dome($PI);
	$gets = "3";
	echo $data->sumo($gets);
 ?>