<?php

class Animal
{
    public $name;
    public function __construct($name)
    {
        echo '鬼哭狼嚎';
        $this->name = $name;
    }

    public function shout($n)
    {
        echo '鬼叫';
    }
}
class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        echo '张涛傻叫';
    }
    public function shout($num)
    {
        for($i=1;$i<=$num;$i++)
        {
            echo '哈哈';
            echo '<br>';
        }
    }
}
$cat = new Cat('傻子');
// $cat->shout(2);
// 方法的重写
// 1.子类要父类方法名保持一致、参数的个数一致
// 2.子类要重写父类方法时，权限修饰符要比父类的宽松
// 3.当父类方法被子类重写后，parent::方法名
// 关键字 修饰类该类不能被继承
// 	修饰方法该方法不能被重写
// 不能修饰属性
?>