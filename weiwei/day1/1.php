<?php
// 类
class Man
{
    // 属性
    public $name;
    public $age;
    // 方法
    public function cry()
    {
        echo '5555';
    }
}
// 对象：实例化出的结果
$m1 = new Man;
$m1->name = '老王';
$m1->age = 30;
$m1->cry();
var_dump($m1);
echo '<hr>';
$m2 = new Man;
$m2->name = '小明';
$m2->age = 18;
var_dump($m2);
$m2->cry();
?>