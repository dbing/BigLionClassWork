<?php
class Man
{
    public $name;
    public function cry()
    {
        echo '123'.$this->name;
    }
    //构造方法
    public function __construct($name)
    {
        $this->name = $name;
    }
}
$man = new Man('张三');
$man->cry();