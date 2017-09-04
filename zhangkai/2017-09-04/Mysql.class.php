<?php

class MySql implements DataBase
{
    private $error = '';
    private static $instance;
    private function __construct()
    {
        mysql_connect('localhost:3306','root','123456');
        mysql_select_db('test');
        mysql_query('set names utf8');
    }

    static function getinstance()
    {
        if(self::$instance instanceof self)
        {
            return self::$instance;
        }
        else
        {
            return self::$instance = new self();
        }
    }
//添加
    public function add($table,$data)
    {
        $sql = "INSERT INTO $table";
        $sql .= '('.implode(',', array_keys($data)).')';
        $sql .= ' VALUES ';
        $sql .= "('".implode("','", array_values($data))."')";
        $res = mysql_query($sql);
        if($res)
        {
            return mysql_insert_id();
        }
        else
        {
            $this->error = mysql_error();
            return false;
        }
    }
    //删除
    public function delete($table,$where)
    {

    }

    //修改
    public function save($table,$where)
    {

    }

    public function find($table,$where=1)
    {
        echo 'find OK';
    }

    //查询
    public function select($table,$where=1)
    {
        $sql = "SELECT * FROM $table WHERE $where";
        $result = mysql_query($sql);
        if($result)
        {
            while ($row = mysql_fetch_assoc($result))
            {
                $list[] = $row;
            }
            return $list;
        }
        else
        {
            $this->error = mysql_error();
            return false;
        }
    }
    //读取字段
    public function getField($table,$column,$where=1)
    {

    }
    //错误
    public function getError()
    {
        return $this->error;
    }
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}


?>