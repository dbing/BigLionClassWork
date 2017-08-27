<?php
//求出园的面积与周长
define('PI',3.1415926);
class CircleSize
{
    public function getS($r)
    {
        return $r*$r*3.14;
    }
    public function getC($r)
    {
        return $r * 2 * 3.14;
    }
}
$obj = new CircleSize;
echo $obj->getS(10);
echo "<hr>";
echo $obj->getC(10);

echo "<hr>";

class Man
{
    public $name;
    public function cry()
    {
        echo '123';
    }
    //构造方法    (在实例化时自动触发)
    public function __construct()
    {
        echo '大家好';
    }
    //析构方法    (在对象消失时自动触发)
    public function __destruct()
    {
        echo '年';
    }
}
$man = new Man;
$man->cry();