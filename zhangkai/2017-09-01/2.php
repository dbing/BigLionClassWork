<?php
//function __autoload($class)
//{
//    require ($class.'.class.php');
//}

function myAuto($name){
    var_dump('auto1 class-->'.$name);
    @include $name.'.class.php';
}

function myAuto2($name){
    var_dump('auto2 class-->'.$name);
    @include 'lib/'.$name.'.class.php';
}
spl_autoload_register('myAuto2');
spl_autoload_register('myAuto');
$m1 = new men;
var_dump($m1);

$db = new Mysql();
var_dump($db);