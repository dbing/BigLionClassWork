<?php 
// lixin
//0901
class aa
{
	public function work()
	{
		echo '1111';
	}
}

class teacher extends aa
{
	public function work()
	{
		echo 'hello';
	}
}

class student extends aa
{
	public function work()
	{
		echo 'word';
	}
}

class headmaster extends aa
{
	public function work()
	{
		echo '22222';
	}
}


function echoWork($obj)
{
	if($obj instanceof aa)
	{
		$obj->work();
	}
}

// echoWork(new teacher);
// echoWork(new student);
echoWork(new headmaster);

?>