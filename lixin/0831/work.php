<?php 
//lixin

 //多态
  class work{
  	    public function ming()
  	    {
  	    	echo "999";
  	    }	
  }
 
   class xxx extends work
   {
  	  public function ming()
  	  {
  	  	  echo "666";
  	  }
  }

  class lll extends work
   {
  	  public function ming()
  	  {
  	  	  echo "xxx";
  	  }
  }

 	function echowork($one)
 	{
 		if($one instanceof work)
 		{
 			 $one-> ming();
 		}
 	}
    echowork(new work);//继承后 子类的方法都可以调用父类来访问


 ?>