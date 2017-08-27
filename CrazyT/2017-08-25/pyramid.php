<?php  
class Pyr
{
	public $num;

	public function __construct($num)
	{
		$this->num = $num;
	}
	
	public function pyr()
	{
		echo "<center>";
		for($i=1; $i <= $this->num; $i++)
		{
			echo str_repeat('*',($i * 2) - 1);
			echo '<br />';
		}
		echo "</center>";
	}
}
$p = new Pyr(18);
$p->pyr();
?>