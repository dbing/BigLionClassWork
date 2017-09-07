<?php
header("content-type:text/html;charset=utf8");
class cat{
    public $name;
    public $age;
    public $color;

    public function __construct($name,$age,$color)
    {
        $this->name=$name;
        $this->age=$age;
        $this->color=$color;
    } 
    public function show()
    {
        echo "小猫的姓名:".$this->name."年龄是：".$this->age."花色是".$this->color;
    }
}

$wh=new Cat('小白',8,'白色');
$wh->show();echo "<br>";
$xh=new Cat('小花',18,'花色');
$xh->show();

?>