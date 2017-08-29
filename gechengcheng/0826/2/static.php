<?php
class Man
{
    //静态属性——类属性
    static public $name = '小李';
    public $num = 3;
    //静态方法
    static public function test()
    {
        echo 'Hi';
    }
    public function demo()
    {
        echo 'demo';
    }
}
    $m = new Man;
//1.1静态属性不能通过对象来访问
//echo $m->$name;
//1.2静态方法可以通过对象来访问
//$m->test();
//1.3静态方法可以通过类来直接访问
//Man::test();
//1.4用静态方式调用一个非静态方法会导致一个E_STRICT级别的错误
//Man::demo();
//1.5静态属性只能被初始化为文字或常量，不能使用表达式

Man::test();

$className = 'Man';

$className::test();
