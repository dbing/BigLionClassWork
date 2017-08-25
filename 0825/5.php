<?php
header("content-type:text/html;charset=utf-8");
class Pyramid{
	//金字塔
	public $num;
	public function __construct($num){
		$this->num = $num;
	}
	public function py(){
		echo '<center>';
		for($i = 1; $i <= $this->num; $i++){
			echo str_repeat('*', ($i* 2)-1)."<br>";
		}
		echo '</center>';
	}
	
}

$py = new Pyramid(20);
$py->py();