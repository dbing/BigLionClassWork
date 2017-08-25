<?php
/*
 *  面向对象求圆的面积，周长
 *  面积 πR*2
 *  周长 2πR
 * */

class reg
{
    //魔术方法 --构造方法
    public function __construct()
    {
        echo "我是构造方法";
        echo "<br>";
    }

    //魔术方法 --析构方法
//    public function __destruct($user)
//    {
//        $this -> name = $user;
//        echo "<br>";
//    }


    //求面积
    function area($r)
    {
        return 3.1415926 * $r * $r;
    }
    //求周长
    function perimeter($r)
    {
        return 3.1415926 * $r *2;
    }
}
    $areas = new reg;
    $res = $areas -> area(3);
    echo "面积是:";
    echo $res;

    echo "<br>";

    $per = new reg;
    $data = $per->perimeter(6);
    echo "周长是：";
    echo $data;

    echo "<br>";

    $data = new reg;
    $data -> area('我是小张')

?>