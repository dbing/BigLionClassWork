<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $接口的方法
 *         ：還要公開的
 * Date    : 2017/8/31 0031
 * Time    : 20:51
 */

/**
 * Interface Man
 * 使用接口（interface），可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
接口是通过 interface 关键字来定义的，就像定义一个标准的类一样，但其中定义所有的方法都是空的。
接口中定义的所有方法都必须是公有，这是接口的特性。
 */
interface Man{
   public function man();

}
interface  Get{
    public function get();
}
interface Post{
    public function post();
}

/**
 * implements
 * Class Min
 * 要实现一个接口，使用 implements 操作符。
 * 类中必须实现接口中定义的所有方法，否则会报一个致命错误。
 * 类可以实现多个接口，用逗号来分隔多个接口的名称。
 */
class Min implements Man,Get,Post
{
    public function man(){}
    public function get(){}
    public function post(){}
}
$m = new Min;
var_dump($m);
?>