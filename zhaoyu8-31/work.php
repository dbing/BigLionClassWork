<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
 //多态
  class work{
  	    public function echoe()
  	    {
  	    	echo "888";
  	    }	
  }
 
   class zoo extends work
   {
  	  public function echoe()
  	  {
  	  	  echo "666";
  	  }
  }

  class aoo extends work
   {
  	  public function echoe()
  	  {
  	  	  echo "aoo";
  	  }
  }

 	function echowork($one)
 	{
 		if($one instanceof work)
 		{
 			 $one-> echoe();
 		}
 	}
    echowork(new work);//继承后 子类的方法都可以调用父类来访问


 ?>