<?php 
class cir{
		public $PI;
		//圆
		public function c($ban)
		{
			return $this->PI * $ban * $ban;
		}
		public function __construct($PI)
		{
			 $this->PI = $PI;
		}
}
	$PI = "3.1415";
	$data = new dome($PI);
	$ban = "3";
	echo $data->c($ban);
 ?>