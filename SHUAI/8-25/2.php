<?php
header("content-type:text/html;charset=utf-8");
class Man{
    //计算园的面积
    public function getA($r){
        return 3.14 * $r * $r;
    }
    //计算周的
    public function getB($r){
        return 2 * 3.14 * $r;
    }
}
$m = new Man;
echo $m->getA(2);
echo "<br/>";
echo $m->getB(2);
?>