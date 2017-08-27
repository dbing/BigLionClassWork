<?php
// 1.面向对象三大特性： 封装，继承，多态

//类
class Man{
  //属性
  public $name;
  public $age;
  //方法
  public function cry(){
    echo '55555';
  }
}
//对象：实例化类的结果
$m1 = new Man;
$m1->name = "xiaoming";
$m1->age = 18;
$m1->cry();
var_dump($m1);