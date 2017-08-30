<?php 

  class xun{

  		public function circle($sum)
  		{
  			for($a=1;$a<=$sum;$a++)
  			{
  				echo str_repeat("*", ($a*2) - 1)."<br>";
  			}
  		}

  }
  $data = new xun;
  $data->circle("60");
 ?>