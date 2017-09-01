<?php
header('content-type:text/html;charset=utf8');
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

// $r = new Rich;
// $r->name = '王健林';
// echo $r->name;
// echo $r->getCar();
// echo $r->getMoney();

$cr = new ChinaRich;
var_dump($cr);

echo $cr->getCar();

$money = $cr->getMoney();
var_dump($money);


// 公开的属性、方法会被子类继承
// 受保护的属性、方法 会子类继承
// 私有的属性、方法不被子类继承

// 受保护的、私有的属性或方法再类外是不可以访问的

?>