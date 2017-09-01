<?php
/**
* 
*/
 header("content-type:text/html;charset=utf-8");
// class Cat
// {

// }
class Developer
{
	public function work()
	{
		echo "Debug...";
	}

}

class englishTeacher
{
	public function work()
	{
		echo "say hellow";
	}
}

class MatnTeacher
{
	public function work()
	{
		echo "Math";
	}
}

function echoWork($obj)
{
	if($obj instanceof Developer)
	{
		$obj->work();
	}else if($obj instanceof englishTeacher)
	{
		$obj->work();
	}else{
		echo "Error：no object";
	}
}
// $phper = new Developer;
// echoWork($phper);
// echoWork(new englishTeacher);
// echoWork(new Cat); 

 ?>