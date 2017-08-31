<?php
/*
 *
 * 方法的重写
 * 1.子类要父类方法名保持一致，参数的个数一致
 * 2.子类要重写父类方法时，权限修饰符要比父类的宽松
 * 3.当父类方法被子类重写后，parent：：方法名
 *
 * 4.final关键字   修饰类该类不能被继承   修饰的方法该方法不能被重写   不能修饰属性
 *
 * */
class pat{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function shout()
    {
        echo $this->name.'xiaokeai';
    }
}

class Pat extends ann{
    public function __construct(){
        parent::constructt();
        echo 'niyao momochuai';
    }
    public function shout($num)
    {
        for($i = 1;$i<=$num;$i++){
            echo "皇冠给你带";
        }

    }
}

$cat = new par('wanghong');
$cat->shout(2);