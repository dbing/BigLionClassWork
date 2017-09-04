<?php
class man
{
    public $man = "sadjhgas";
}

$m = new man;

var_dump($m);
echo serialize($m);

file_put_contents('db.txt',serialize($m));

?>