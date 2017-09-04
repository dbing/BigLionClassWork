<?php

require "DB.class.php";
require "Mysql.class.php";

$db = MySql::getinstance();
$db1 = MySql::getinstance();

if($db = $db1)
{
    echo "OOOOOOOOOK";
}
else
{
    echo "NO";
}