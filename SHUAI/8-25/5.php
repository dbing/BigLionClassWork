<?php
/*
* 金字塔
* **/
class Man{
    //构造
    public function __construct($num){
            $this->num = $num;
    }
    //循环金子塔
    public function get(){
        echo "<center>";
        for($i = 0;$i<=$this->num;$i++){
            echo @str_repeat('*',($i * 2)-1);
            echo '<br/>';
        }
        echo "</center>";
    }
}
$m = new Man(10);
$m->get();
?>