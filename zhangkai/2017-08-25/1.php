<?php

/*
 *   第一天
 *   类
 * */

class man
{
    //属性
        public $name;
        public $age;

    //构造方法
    public function __construct($user)
    {
        $this->name = $user;
    }
    //方法
    public function soft()
    {
        echo "你好坏啊！".$this->name;
    }
}

    //实例化对象
    $one = new man('xiaozhang');
//    $one -> name = '张';
    $one -> age = '22';
    $one->soft();
    var_dump($one);

    echo "<br/>";

    $two = new man('好好敲代码');
//    $two -> name = '凯';
    $two -> age = '30';
    $two ->soft();
    var_dump($two);
?>