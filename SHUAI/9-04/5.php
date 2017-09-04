<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $单例模式
 *         :目标得到同一个对象
 *         :1.私有化构造方法 2.公开的静态方法 3.私有的静态属性 4.防止克隆 5：防止继承
 * Date    : 2017/9/4 0004
 * Time    : 19:39
 */
class  Man
{
    static $info;
    private function __construct()
    {
    }
    static function get()
    {
        if(self::$info instanceof self)
        {
//            echo '1111';
             return self::$info;
        }else{
//            echo '11';
           return self::$info = new self();
        }

    }
   private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
$db1 = Man::get();
$db2 = Man::get();
//$db2 = clone $db1;

if($db1===$db2){
    echo '是的';
}else{
    echo 'NO';
}
?>