<?php
class Man {


static public $name='张三';

static public function text()
{
	echo 'HI';
}

}
$obj=new Man;
$obj->text();
//静态方法不能用对象来访问（$obj->$name）
//静态方法可以使用($obj->text)
//静态方法能通过类来直接访问
Man::text();

//5.5版本以上可以使用
$ManClass='Man';
$ManClass::text();
?>

