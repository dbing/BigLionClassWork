<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $多态 和基类
 * Date    : 2017/8/30 0030
 * Time    : 19:24
 */
class Sartf
{
  public function work()
  {
      echo '11';
  }
}
class Path extends Sartf
{
   public function work()
   {
       echo '222';
   }
}
class Min extends Sartf
{
    public function work()
    {
        echo '333';
    }
}
 function echork($obj)
{
    if($obj instanceof Sartf)
    {
        $obj->work();
    }
}
//echork(new Sartf);
//echork(new Path);
//echork(new Min());

?>