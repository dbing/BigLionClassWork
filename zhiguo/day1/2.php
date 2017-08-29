<?php

define('PI', 3.141592653);
$r=3;
class CircleSize{


function getS($r){

return PI*$r*$r;

}

function getC($r){

return PI*$r*2;

}

}
$yuan= new CircleSize;
$s=$yuan->getS(10);

$c=$yuan->getC(10);

var_dump($s);
echo '<br>';
var_dump($c);

?>