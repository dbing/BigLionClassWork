<?php
error_reporting(E_ALL ^E_DEPRECATED);
class Mysql
{
    public $error;
    public function __construct()
    {
        $con = mysql_connect('localhost:3306','root','root');
        if(!$con)
        {
            die(mysql_error());
        }
        mysql_select_db('shop') or die(mysql_error());
        mysql_query('set names utf8') or die(mysql_error());
    }
    /**
     * 新增数据
     * @param string  $sql 插入的$sql
     * @return bool
     */
    public function insert($sql)
    {
        return $result = mysql_query($sql);
    }
    /**
     * 查询多行
     * @param string  $sql 插入的$sql
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
        }else
        {
            $this->error = mysql_error();
            return false;
        }
    }
}
