<?php 
class Demo
{
	public $name='demo';
	//类常亮定义 const
	const pi = 3.1415926;

	public function getPi()
	{
		//self 本类
		echo self::pi;
	}
}

// 类名::常量名
echo Demo::pi;

?>