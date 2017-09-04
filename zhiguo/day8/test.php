<!-- 张志国 -->
<?php
// error_reporting(E_ALL ^E_DEPRECATED);
// require "MySql.class.php";
class Man
{
	public $name = 'han人';
}


$m = new Man;
var_dump($m);

// 序列化
file_put_contents('obj', serialize($m));
echo serialize($m);