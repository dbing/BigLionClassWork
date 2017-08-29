<?php
header("content-type:text/html;charset=utf-8");
/**
 * 访问控制(修饰词) 与 继承性
 */
class One {
	public $name = '改锥';
	public $sex  = '中性';
	protected $car = '66666'; // 受保护的类(除本类和子类)，其他无法访问
	private $money = '77777'; // 私有的类外无法访问（只有本类可以访问）
	public function __construct()
	{
		echo 'One';
	}
}
//继承One类
class Two extends One {
	public function __construct()
	{
		echo 'Two';
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

$two = new Two;
echo $two->name = '王健林';
echo $two->getCar();
// echo $two->getMoney();