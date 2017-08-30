<?php 

class Rich{
	public  $name="陈一发";
	public  $sex = "女";
	protected $car = "Puma";
	private $money = "1100000000000";
	}
 	// $r = new Rich;
 	// echo $r->name;
 	// echo $r->sex;



 class ChinaRich extends Rich{
 	public function getCar(){
 		return $this->car;
 	}

 	public function getMoney(){
 		return $this->money;
 	}


 }


 // $r = new ChinaRich;
 // echo $r->getCar();

















 ?>