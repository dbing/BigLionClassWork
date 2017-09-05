<?php
header("content-type:text/html;charset=utf8");
class Test
{
    public function say()
    {
        echo 'hello';
    }
    //构造函数
    public function __construct()//在类进行实例化时自动执行
    {
        echo 'hi'.'<br>';
    }
    //析构函数
    public function __destruct()//在类进行销毁时自动执行
    {
        echo 'baibai'.'<br>';
    }
}
//实例化
$one=new Test;
$one->say();
unset($one);
?>