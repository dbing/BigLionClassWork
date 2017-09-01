<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $抽象類
 * Date    : 2017/8/31 0031
 * Time    : 19:53
 */
abstract class Man
{
    abstract protected function getOne($sql);
    abstract protected function getAll($sqi);
    abstract protected function del($sql);
}
class GetMysql extends Man
{
     public function getOne($sql)
     {
         echo __METHOD__;
     }
     public function getAll($sql)
     {
         echo __METHOD__;
     }
     public function del($sql = '1')
     {
         var_dump($sql);
         echo __METHOD__;
     }
}
$db = new GetMysql;
$db->del();
?>