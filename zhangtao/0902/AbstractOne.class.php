<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/02
 * @param  抽象类 定义为抽象的类 不能被实例化
 *                或者其中有方法为抽象的，则类必须抽象
 *                继承一个抽象类时，子类必须定义分类的所有抽象方法
 * @return NULL
 */
abstract class AbstractOne 
{
	abstract protected function getOne($sql);
	abstract protected function getTwo($sql);
}

class Two extends AbstractOne
{
	//可选参数不传的话，必须默认为空
	public function getOne($sql)
	{
		echo __METHOD__;
	}
	public function getTwo($sql)
	{
		echo __METHOD__;
	}
}

$t = new Two;
var_dump($t);