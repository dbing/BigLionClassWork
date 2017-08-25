<?php
header("content-type:text/html;charset=utf-8");
class ManList{
    //构造方法
    public function __construct($name,$age,$color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    public function get()
    {
        echo '姓名'.$this->name.'<br/>';
        echo '年龄'.$this->age.'<br/>';
        echo '颜色'.$this->color.'<br/>';
    }
}
$m = new ManList('小飞',3,'黄色');
$m->get();
echo "<________________>";
var_dump($m);
?>