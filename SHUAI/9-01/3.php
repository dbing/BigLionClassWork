<?php
header("content-type:text/html;charset=utf-8");
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $魔術的常量
 * Date    : 2017/8/31 0031
 * Time    : 14:42
 */
class Min
{
    /**
     *
     * getDemo
     *__CLASS__
     * 代表當前類名，只能在類的內部使用
     */
    public function getDemo()
    {
        echo __CLASS__;
    }
    /**
     * getClass
     * __FUNCTION__
     *代表當前方法名,只能在類的內部使用
     */
    public function getClass()
    {
        echo __FUNCTION__;
    }
    /**
     * getMan
     * __METHOD__
     * 類的方法名，返回該方法被定義時的名字
     */
    public function getMan()
    {
        echo __METHOD__;
    }
}

$m = new Min;
$m->getClass();
echo '<hr>';
$m->getMan();

echo '<hr>';
echo '當前行號:'.__LINE__;

echo '<hr>';
echo '當前的文件：'.__FILE__;

echo '<hr>';
echo '当前目录：'.__DIR__;

echo '<hr>';
echo basename(__FILE__);//文件的名字
?>