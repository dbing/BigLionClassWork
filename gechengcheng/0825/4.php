<?php
class cat
{
    public $name;
    public $age;
    public $color;
    public function __construct($name,$age,$color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    public function getInfo()
    {
        echo '猫名:'.$this->name;
        echo '<br>';
        echo '年龄:'.$this->age;
        echo '<br>';
        echo '颜色:'.$this->color;
    }
}
$obj = new cat('捏到',21,'白色');
var_dump($obj);
echo '<br>';
$obj->getInfo();

