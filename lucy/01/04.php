<?php  
header('content-type:text/html;charset = utf-8');

/**
* 
*/
class Pyramid
{
	
	function __construct($sum)
	{
		for ($i=1; $i <=$sum ; $i++) { 
			//echo "<center>";
			echo str_repeat('&ensp;', $sum-$i);
			echo str_repeat('*', ($i * 2) - 1);
			//echo "</center>";
			echo "<br>";
		}
	}
}

$p = new Pyramid(4);
