<?php
class  Demo
{
 public $name='dome';
    const pi =3.1415926;

    public function getPi(){
        echo self::pi;
    }
}

//$d = new Demo;
//echo $d->name;echo Demo::pi;
//echo $d->pi;
echo Demo::pi;
echo "<hr>";
 $d = new Demo;
$d->getPi();
?>