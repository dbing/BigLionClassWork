<?php
header("Content-type:text/html;charset=utf-8;");
class Man
{
    public $name;
    // 构造方法
    public function __construct($user)
    {
        $this->name = $user;
    }
    public function say()
    {
        echo 'Hi '.$this->name;
    }
}
// 构造方法
$lisi = new Man('李四');
$lisi->say();
$zhaosi = new Man('赵四');
$zhaosi->say();

?>