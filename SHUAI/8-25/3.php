<?php
header("content-type:text/html;charset=utf-8");
class Man{
    public function cry(){
        echo "555555";
    }
    //构造方法
    public function __construct(){
        echo '早上好';
    }
    //析构方法
    public function __destruct(){
        echo '晚上好';
    }
}
$m = new Man;
$m->cry();

?>