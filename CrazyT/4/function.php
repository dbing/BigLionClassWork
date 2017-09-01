<?php
/**
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/8/30
 * Time: 20:22
 */

class Rich
{
    public $name = "老王";
    public $sex = "男";
    protected $car = "加特林";
    private $money = "99999";

    public function __construct()
    {
        echo "Rich";
    }
}

class ZhangSan extends Rich
{
    public function __construct()
    {
//        parent::__construct();
        echo "zhangsan";
    }

    public function getCar()
    {
        return $this->car;
    }

    public function getMoney()
    {
        return $this->getMoney();
    }
}

//$aa = new Rich();

$a = new ZhangSan();
//echo $a->getCar();
//echo $a->getMoney(); // 私有 不可以继承
