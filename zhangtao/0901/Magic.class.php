<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/01
 * @param  魔术方法   某些情况下，会自动调用的方法
 * @param  构造方法   对象在实例化之后会自动调用
 * @param  析构方法   对象在被销毁前自动调用的方法
 * @return NULL
 */
class Magic 
{
	public $name = 'xxxN';
	protected $car = 'xxxxxxC';
	private $age = '110';

	public function demo()
	{
		echo '这是一个模板';
	}
	public function __clone()
	{
		echo 'Clone me';
	}
	//对象访问一个不存在或者权限不够的属性时，自动触发
	public function __get($visit)
	{
		echo '正在访问属性:'. $visit;
		return $this->$visit;
	}
	//设置一个不存在或者权限不够的方法时，自动触发
	public function __set($key, $val)
	{
		$this->$key = $val;
	}
	//isset or empty 去判断一个权限不够或者不存在的属性时，自动触发
	public function __isset($isset)
	{
		print_r($isset);
	}
	//对象销毁不可见的属性，触发
	public function __unset($unset)
	{
		print_r('正在删除'.$unset);
	}
	//去访问一个权限不够或者不存在的方法， 触发
	public function __call($k, $v)
	{
		$this->$key. "()";
	}

	//访问权限不够或者不存在的静态方法， 触发
	public static function __callStatic($name, $values)
	{
		echo "正在访问不存在或权限不够的静态方法：'$name'，". implode(',', $values)."\n";
	}
	
}
// $m = new Magic;
// echo $m->car = "试试<br>";
// $m2 = clone $m;
// $m->shishi = '试试1';
// print_r($m);
// isset($m->age);
// $m->add(1, 2);

// Magic::add(1, 'qqq', 'www');
// $m->demo();