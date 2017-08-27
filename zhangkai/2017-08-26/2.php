<?php
class man{
    //静态化  类属性
    public static $num = 10;

    public function __construct()
    {
        self::$num += 10;
    }
}
echo man::$num;
?>