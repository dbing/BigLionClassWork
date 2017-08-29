<?php
error_reporting(E_ALL ^E_DEPRECATED);
class Mysql
{
    public $error;
    public function __construct($host='localhost',$port=3306,$user='root',$pwd='root',$dbName='user',$charSet='utf8')
    {
        $con = mysql_connect($host.':'.$port,$user,$pwd);
        if(!$con)
        {
            die(mysql_error());
        }
        mysql_select_db($dbName) or die(mysql_error());
        mysql_query('set names'. $charSet) or die(mysql_error());
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
    /**
     * 查询单条数据
     */
    public function date($sql)
    {
        $res = mysql_query($sql);
        if($res)
        {
            return mysql_fetch_assoc($res);
        }else
        {
            $this->error = mysql_error();
            return false;
        }
    }
    /**
     * 删除
     * @param string  $sql $sql语句
     * @return bool
     */
    public function delete($sql)
    {
        if(mysql_query($sql))
        {
            return mysql_affected_rows();
        }else
        {
            $this->error = mysql_error();
            return false;
        }
    }

    public function update($sql)
    {
        $res = mysql_query($sql);
        if($res)
        {
            return mysql_affected_rows();
        }else
        {
            $this->error = mysql_error();
            return false;
        }
    }
}
