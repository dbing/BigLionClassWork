<?php
/*
 * 魔术常量
 *
 * */
class man
{
    public function getclass()
    {
        echo __CLASS__;
    }

    public function getmenthod()
    {
        echo __FUNCTION__;
    }

    public function gettest()
    {
        echo __METHOD__;
    }

}
$m = new man;
$m->getclass();
$m->getmenthod();
echo "<br/>";
echo "当前行".__LINE__;
echo "<br/>";
echo "当前文件夹".__FILE__;
echo "<br/>";
echo "当前目录".__DIR__;
echo "<br/>";
echo basename(__FILE__);
echo "<br/>";
echo dirname(__FILE__);
echo "<br/>";
echo dirname(dirname(__DIR__));
echo "<br/>";
$m->gettest();



