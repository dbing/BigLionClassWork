<?php
header("content-type:text/html;charset=utf-8");
$name = '改锥';
$age = '99';
$sex = '中性';
/**
 * 类
 */
class Index{
	public $name;
	public $age;
	public $sex;
	public function index(){
		echo 'hello world'."<br/>";
	}
}
$obj = new Index;
$action = $obj->index();

print_r($action);

