<?php
class pyramid
{
    public $num;
    public function __construct($num)
    {
        $this->num=$num;
    }
    public function show()
    {
        echo "<center>";
        for($i=1;$i<=$this->num;$i++)
        {
            echo str_repeat('*',($i*2)-1);
            echo "<br>";
        }
    }
}
$py=new pyramid(3);
$py->show();

?>