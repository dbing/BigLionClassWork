<?php
class man
{
    public $man = "sadjhgas";
}

$objstr = file_get_contents('obj');

var_dump($obj);

unserialize($objstr);
echo $obj->name;



?>