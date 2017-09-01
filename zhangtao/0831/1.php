<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/08/31
 * @param  多态性
 *         同一种方法，实现不同的结果（弱类语音）
 */
//基类 员工类
class Staff 
{
	public function work()
	{
		echo '员工类，工作方法，具体使用子类';
	}
}

//开发者 类
class Developer extends Staff
{
	public function work()
	{
		echo 'debug...调试工作';
	}
}

//教师 类
class Teacher extends Staff
{
	public function work()
	{
		echo '教师，养育祖国未来的花朵';
	}
}

function echoWork($obj)
{
	if($obj instanceof Staff)
	{
		$obj->work();
	}
}
echoWork(new Staff);