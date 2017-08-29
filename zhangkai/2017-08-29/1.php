<?php
class rich
{

    //公开的属性，方法会被子类继承
    //受保护的属性，方法 回被子类继承
    //私有的属性，方法不会被子类继承
    public $name = '屌丝';
    public $sex = '22';
    protected $car = '250QSN';
    public $money = '1.28';

    public function __construct()
    {
        echo 'hello';
    }
    public function test(){
        echo "xiaozhang";
    }
}

class chinarich extends rich
{
    public function __construct(){
        parent::test();

        parent::__construct();

        echo "world";
    }

    public function getmoney()
    {
        return $this->money;
    }
    public function getcar()
    {
        return $this->car;
    }
}

$cr = new chinarich();
var_dump($cr);

echo $cr->getcar();

$money = $cr->getmoney();
var_dump($money);
?>