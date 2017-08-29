<?php
header("content-type:text/html;charset=utf-8");
//杨嘉峰 第四天
//2017年8月29日21:20:44

class father
{
    public $name = "王思聪";
    public $sex = "男";
    protected $car = "劳斯莱斯";
    private $money = "10000000000000k";



}
class son extends father
{
    public function getCar()
    {
        return $this->car;
    }
}

$er = new father;
echo $er->getCar();
//$er = new son;
//var_dump($er);

//公开的方法、属性会被子类继承
//受保护的方法、属性会被子类继承
//私有的方法、属性不会被子类继承！！！



?>