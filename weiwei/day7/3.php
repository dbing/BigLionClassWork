<?php 
/*
geng
 */
 header("content-type:text/html;charset=utf-8");
class Man
{
	public function getClass(){
		echo __CLASS__;
	}
	public function getFunction(){
		echo __FUNCTION__;

	}

	public function getMethod(){
		echo __METHOD__;
	}
}
$m = new Man;
$m->getClass();
echo '<hr>';
$m->getFunction();
echo '<hr>';
echo '当前行号:'.__LINE__;
echo '<hr>';
echo '当前的文件:'.__FILE__;
echo '<hr>';
echo '当前目录：'.__DIR__;
echo '<hr>';
echo basename(__FILE__);
echo '<br>';
echo dirname(__FILE__);
echo '<br>';
echo dirname(dirname(__DIR__));
echo '<hr>';
$m->getMethod();
?>