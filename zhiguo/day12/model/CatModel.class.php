<!-- 张志国 -->
<?php

class CatModel
{
    protected $tableName = 'category';
    protected $db;         // 数据库对象

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