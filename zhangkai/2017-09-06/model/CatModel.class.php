<?php

class CatModel
{
    protected $tableName = 'cate';
    protected $db;
    public function __construct()
    {
        $this->db = $GLOBALS['db'];
    }

    public function insert($data)
    {
        $data['add_time'] = time();
        return $this->db->add($this->tableName,$data);
    }

    public function select()
    {
        return $this->db->select($this->tableName);
    }
}