<!-- 张志国 -->
<?php

class AdminModel
{
    protected $db;
    protected $tableName = 'admin';

    public function __construct()
    {
        $this->db = $GLOBALS['db'];
    }

    public function insert($data)
    {
        $result = $this->db->add($this->tableName,$data);
        if($result === false)
        {
            echo $this->db->getError();
            exit;
        }
        return $result;
    }

    public function select()
    {
        return $this->db->select($this->tableName);
    }
}