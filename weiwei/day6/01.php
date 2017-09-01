<?php 
 header("content-type:text/html;charset=utf-8");
 class Staff
 {
 	public function work()
 	{
 		echo "具体在子类中实现";
 	}
 }

 class  Develper extends Staff
 {
 	public  function work()
 	{
 		echo "Debug";
 	}
 }

 class Teacher extends Staff
 {
 	public function work()
 	{
 		echo "Teacher";
 	}
 }
class Cook extends Staff
{
	public  function work()
	{
		echo "Cokking";
	}
}

function  echoWork($obj)
{
   if($obj instanceof Staff){
   $obj ->work();
   }
}

// echoWork(new Develper);
// echoWork(new Teacher);
echoWork(new Cook);
?>