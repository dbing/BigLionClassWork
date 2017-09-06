<?php 

  class aa
  {
  	    public function b()
  	    {
  	    	echo "888";
  	    }	
  }
 
   class bb extends aa
   {
  	  public function b()
  	  {
  	  	  echo "我是b";
  	  }
  }

  class cc extends aa
   {
  	  public function b()
  	  {
  	  	  echo "我是b";
  	  }
  }

 	function c($one)
 	{
 		if($one instanceof aa)
 		{
 			 $one-> b();
 		}
 	}
    c(new aa);

 ?>