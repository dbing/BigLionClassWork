<?php
class Man
{
    //静态属性——类属性
    static public $num =1;
    public function __construct()
    {
        //Man::$num += 1;
        self::$num += 1;
    }
}


echo Man::$num;