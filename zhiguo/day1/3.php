<?php
 header('content-type:text/html;charset=utf8');

class Man{
//公共的
public $name='';
public function __construct(){

	echo '请说：';
}


public function say(){

	echo 'hi'.'<br>';
}
public function __destruct(){

	echo '好好学习';
}


}

$obj=new Man;
//unset($obj); 若是删除对象，那么27行所输出的对象将会消失，就会报错，具体可以查看
$obj->say();
echo '<br>';
var_dump($obj);
echo '<br>';

?>