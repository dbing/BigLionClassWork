<?php
/**
 * @author 张涛 2017/08/30 14:45:45
 * @param  $this 指的是某个对象
 * @return null
 */
header("content-type:text/html;charset=utf-8");
class Last 
{
	public $name = '三毛';
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function shout()
	{
		echo '叫';
	}
}	
// $obj = new Last;
// $newObj = $obj; //把对象赋址 + 值
// $newObj->name = '二毛';
// echo $obj->name;
class Cat extends Last 
{
	/**
	 * 重写（方法要严谨）
	 *  1.子类要和父类方法名称保持一致，参数个数一致
	 *  2.子类要重写父类方法时，权限修饰符要比父类的宽松
	 *  3.当父类被子类重写后，parent::方法名 就可以再次执行父类方法
	 *  4.final 修饰的类（不能被继承）和方法（不能被重写）、属性（不能修饰属性） 
	 */
	public function shout()
	{
		echo '喵喵~';
	}
}

$cat = new Cat('猫猫');
$cat->shout();