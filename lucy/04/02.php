<?php 
class Rich
{
	public $name="王思聪";
	public $sex = "男";
	protected $car = "xxx 牌";
	private $money = "1000000000";

	public function __construct()
	{
		echo 'Rich';
	}

	public function test()
	{
		echo 'TEST';
	}
}


class ChinaRich extends Rich
{
	public function __construct()
	{
		parent::__construct();
		echo 'ChinaRich';
	}

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

