<?php
class Man{

	const PI = 3.1415926;

	public function demo(){
		echo self::PI;
	}
}
//类名：常量
echo Man::PI;

echo '<hr/>';

$m  = new Man;

$m->demo();
?>