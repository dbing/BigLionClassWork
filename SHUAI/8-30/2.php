<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $方法重写
 * content : 子类要父类方法名保持一致,参数的个数一致
 *           子类要重写父类方法时,权限修饰要比父类的冠松;
 *           当父类方法被子类重写后,parent ::方法名
 *           final 关键字 修饰的类和方法
 * Date    : 2017/8/30 0030
 * Time    : 14:53
 */
class Min
{
    public $name;
    public function __construct($name)
    {
        echo '大帅';
        $this->name = $name;
    }
    public function show()
    {
        echo '1111';
    }
}
class Cat extends Min
{
 public function __construct($name)
 {
     parent::__construct($name);
     echo '小帅';
 }
 public function show()
 {
     echo '22';
 }
}
$cat = new Cat('SHUAI');
$cat->show();
?>