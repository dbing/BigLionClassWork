<?php
class Pyramid
{
    public $num;
    public function __construct($num)
    {
        $this->num = $num;
    }
    public function printPyramid()
    {
        echo '<center>';
            for($i=1; $i<$this->num; $i++)
            {
                echo str_repeat('A',($i * 2)-1);
                echo '<br>';
            }
        echo '</center>';
    }
}

$p = new Pyramid(10);
$p->printPyramid();