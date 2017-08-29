<?php
/*
 * SHUAI
 * 2017.8.29
 * 访问控制
 * **/
class Rich
{
	public $name = "纪帅飞";
	public $sex = "男";
	protected $car = "是个大帅哥";
	private $money = "1000000000";
	public function __construct()
	{
		echo '111';
	}


}
class China extends Rich
{
	public function __construct()
	{
		parent::construct;
		echo '222';
	}	

	public function Car()
	{
      return $this->car;
	}
	   public function Money()
	{
		return $this->money();
	}
}
$cr = new China;
echo $cr->Car();


?>