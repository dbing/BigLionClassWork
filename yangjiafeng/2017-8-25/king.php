<?php 

class king
{
	//金字塔
	public function prin($num)
	{
		echo '<center>';
		for ($i=1; $i <=$num ; $i++)
		{ 
			echo str_repeat('*', ($i*2)-1);
			echo '<br>';
		}
		echo '</center>';
	}

	
}
	
	$p = new king;
	$p->prin(8);


 ?>