<?php
error_reporting(E_ALL ^E_DEPRECATED);

class MySql
{
    public $error;

    public function __construct()
    {
        // 1.连接MySQL
        $conn = mysql_connect('localhost:3306','root','');
        if(!$conn)
        {
            die(mysql_error());
        }
        // 2.选库
        mysql_select_db('test') or die(mysql_error());
        // 3.设置字符
        mysql_query('set names utf8') or die(mysql_error());
    }

    /**
     * 新增数据
     *
     * @author BING
     * @param  string  $sql 插入的SQL
     * @return bool
     */
    public function insert($sql)
    {

        $result = mysql_query($sql);
        return $result;
    }

    /**
     * 查询多行
     *
     * @author BING
     * @return array
     */
    public function getAll($sql)
    {
        $result = mysql_query($sql);
        if($result)
        {
            $list = array();
            while($row = mysql_fetch_assoc($result))
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


}