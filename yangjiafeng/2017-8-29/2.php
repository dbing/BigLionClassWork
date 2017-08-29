<?php
//杨嘉峰
//2017年8月29日22:44:39
class father
{
    public $name = "王思聪";
    public $sex = "男";
    protected $car = "劳斯莱斯";
    private $money = "10000000000000k";

    public function __construct()
    {
        echo 'father';
    }

}
class son extends father
{
    public function getCar()
    {
        return $this->car;
    }

    public function __construct()
    {
        echo 'son';
    }
}

?>