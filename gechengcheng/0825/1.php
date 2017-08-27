<?php
//定义一个类
class Man
{
    //属性
    public $name;
    public $age;
    //方法
    public function cry()
    {
        echo '123';
    }
}
//实例化Man
$man =new Man;
$man->name = '张三';
$man->age = 19;
$man->cry();
var_dump($man);
echo '<hr>';
$man1 = new Man;
$man1->name = '王五';
$man1->age = 23;
$man1->cry();
var_dump($man1);