<?php

require "5.php";

class factory
{
    static function getmysql()
    {
        return MySql::getinstrance();
    }
}

//工厂模式
$db = factory::getmysql();
$db1 = factory::getmysql();

if($db === $db1)
{
    echo "OK";
}
else
{
    echo "NO";
}
?>