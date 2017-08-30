<?php 

  class cir{

  		public function circle($sum)
  		{
  			for($a=1;$a<=$sum;$a++)
  			{
  				echo str_repeat("*", ($a*2) - 1)."<br>";
  			}
  		}

  }
  $cir = new cir;
  $cir->circle("60");
 ?>