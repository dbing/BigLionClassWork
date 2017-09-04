<?php

class factory
{
    static function getMysql()
    {
        return new MySql();
    }
}
//工厂模式
$db = factory::getMysql();
$db1 = factory::getMysql();


//var_dump($db);
