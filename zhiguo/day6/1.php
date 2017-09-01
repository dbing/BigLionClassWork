<!-- 张志国 -->
<?php


// 主类
class Staff
{
	public function work()
	{
		echo '具体在子类中进行去实现';
	}
}

class Develper extends Staff
{
	public function work()
	{
		echo 'Debug....';
	}
}

class Teacher extends Staff
{
	public function work()
	{
		echo 'Teaching...';
	}
}

class Cook extends Staff
{
	public function work()
	{
		echo 'Cooking...';
	}
}


function echoWork($obj)
{	//改对象  (属于)    主类
	if($obj instanceof Staff)
	{
		$obj->work();
	}
}

// echoWork(new Develper);
// echoWork(new Teacher);
echoWork(new Cook);

?>