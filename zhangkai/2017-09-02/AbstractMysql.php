<?php

abstract class AbstractMySql
{
    abstract protected function getone($sql);

    abstract protected function getall($sql);

    abstract protected function del($sql);
}

class MySql extends AbstractMySql
{
    public function getall($sql)
    {
    echo __METHOD__;
    }
    public function getone($sql)
    {
        echo __METHOD__;
    }
    public function del($sql)
    {
        echo __METHOD__;
    }
}

$db = new MySql;
var_dump($db);
?>