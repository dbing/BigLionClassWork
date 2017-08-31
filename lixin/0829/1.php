<?php 
//李鑫
//0830
class Rich
{
	public $name="王思聪";
	public $sex = "男";
	protected $car = "xxx 牌";
	private $money = "1000000000";

}


class ChinaRich extends Rich
{
	public function getCar()
	{
		return $this->car;
	}

	public function getMoney()
	{
		return $this->money;
	}
}


$cr = new ChinaRich;
var_dump($cr);

echo $cr->getCar();

$money = $cr->getMoney();
var_dump($money);




?>