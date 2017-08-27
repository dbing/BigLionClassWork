<?php 

define('PI',3,1415926);

$r = 3;

echo PI*$r*$r;//面积

echo "<br>";

echo 2*PI*$r;//周长
echo "<br>";
class CircleSize{
	function getS($r){
		return 3.14 * $r * $r;
	}
}

$obj = new CircleSize;

echo $obj ->getS(10);



 ?>