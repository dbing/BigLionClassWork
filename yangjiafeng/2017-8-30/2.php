<?php 
/**
*	杨嘉峰-对象复制/复址
*	2017年8月31日20:42:31
*
*/

$num = 1;

$abc =& $num;

$abc = 2;

var_dump($num);
var_dump($abc);   //复址取最后一次的值






 ?>