<?php 
 header("content-type:text/html;charset=utf-8");
class Man
{
	public $name = '外星人';
}
$m = new Man;
var_dump($m);
file_put_contents('obj', serialize($m))
?>