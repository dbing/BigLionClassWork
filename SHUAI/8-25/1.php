<?php
/*
 * 第一章课程
 * **/
header("content-type:text/html;charset=utf-8");
class Man{
    //属性
    public $name;
    public $age;
    public function cry(){
    echo '5555';
}

}
//实例化对象
$m = new Man;
$m->name = '小帅';
$m->age = '23';
$m->cry();
var_dump($m);
echo '===================';
echo '<hr/>';
//实例化对象
$m2 = new Man;
$m2->name = '小飞';
$m2->age = '13';
$m2->cry();
var_dump($m2);
?>