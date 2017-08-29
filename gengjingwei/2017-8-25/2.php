<?php
define('PI', 3.1415926);
class CircleSize
{
    function getS($r)
    {
        return 3.14 * $r * $r;
    }
    function getC($r)
    {
        return 2 * 3.14 * $r;
    }
}
$circle = new CircleSize;
echo $circle->getS(10);
echo '<br>';
echo $circle->getS(100);
echo '<br>';
echo $circle->getC(10);
?>