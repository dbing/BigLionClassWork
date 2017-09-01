<?php
class Animal
{
    private $name;
    final public function shout()
    {
        echo '动物叫';
    }
}
class Cat extends Animal
{
}
$cat = new Cat;
$cat->shout();
// 方法的重写
// 1.子类要父类方法名保持一致、参数的个数一致
// 2.子类要重写父类方法时，权限修饰符要比父类的宽松
// 3.当父类方法被子类重写后，parent::方法名
// 4.final 关键字 修饰类该类不能被继承
// 修饰方法该方法不能被重写
// 不能修饰属性
?>