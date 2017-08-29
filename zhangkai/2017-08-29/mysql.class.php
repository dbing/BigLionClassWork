<?php

class Mysql

{
    //构造方法
    public function __construct()
    {
        $res = mysql_connect('localhost:3306','root','123456');
        mysql_select_db('boke');
        mysql_query('set names utf8');
    }

    public function insert($sql)
    {
        if($sql){
            return true;
        }
        else{
            return false;
        }
    }
}