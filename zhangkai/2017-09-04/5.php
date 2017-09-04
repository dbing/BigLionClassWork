
<?php
error_reporting(E_ALL ^E_DEPRECATED);

//require "DB.class.php";
//require "Mysql.class.php";
class MySql
{
    private static $instance;

    private  function __construct()
    {

    }
    static function getinstance()
    {
        if(self::$instance instanceof self)
        {
            return self::$instance;
        }
        else
        {
            echo "diyici";
           return self::$instance = new self();
        }
    }

     private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
/*
 * 单列模式 目标得到同一个对象
 * 1.私有化构造方法
 * 2.公开的静态方法
 * 3.私有的静态属性
 * 4.防止克隆
 * 5.防止继承
 * */

//$db = new MySql();
//$db1 = new MySql();
//
//$db = MySql::getinstance();
////$db1 = MySql::getinstance();
//$db1 = clone $db1;
//if($db === $db1)
//
//{
//    echo "shi";
//}
//else
//{
//    echo "No";
//}