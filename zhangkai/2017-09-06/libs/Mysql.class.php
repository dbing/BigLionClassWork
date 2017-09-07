<?php

class MySql implements Database
{
    private $error = '';
    private static $instance;
    private $config = array();
    final private function __construct()
    {
        $this->config = require ROOT_PATH . '/config/conf.php';

        $conn = @mysql_connect($this->config['db_host'].':'.$this->config['db_port'],$this->config['db_user'],$this->config['db_pwd']);
        mysql_select_db($this->config['db_name']);
        mysql_query('set names '.$this->config['db_char']);
    }

    static function getInstance()
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

}


?>