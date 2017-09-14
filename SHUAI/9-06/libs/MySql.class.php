<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $分装MYSQL 和使用单例模式和工厂模式
 * Date    : 2017/9/4 0001
 * Time    : 19:57
 */
class MySql implements Date
{
    //错误信息
    private $error = '';
    private static $info;
    private $config = array(); //数据库的信息
    /**
     * @return mysql
     */
    public function mysql()
    {
        $this->config =  require ROOT_PATH .'/config/config.php';
        $mysql = mysqli_connect($this->config['db_host'].':'.$this->config['db_port'],$this->config['db_user'],$this->config['db_pwd'],$this->config['db_name']);
//        mysqli_query($mysql,$this->config['db_char']);
        return $mysql;
    }
    static function gteA()
    {
        if(self::$info instanceof self){
            return self::$info;
        }else
        {
            return self::$info = new self();
        }
    }
    /**
     * 添加单条数据
     * @param $table
     * @param $data
     * @return int/bool 成功返回自增ID否则返回bool
     */
    public function add($table,$data)
    {
           $sql = "INSERT INTO $table";
           $sql .= '('.implode(',', array_keys($data)).')';
           $sql .= 'VALUES ';
           $sql .= "('".implode("','",array_values($data))."')";

        $res = mysqli_query($this->mysql(),$sql);
        if($res)
           {
               return true;
           }else{
               $this->error = mysqli_error($this->mysql());
               return false;
           }
    }

    /**
     * 根据id删除数据
     * @param $table
     * @param $data
     * @return int/bool 成功返回受影响行数否则返回bool
     */
    public function delete($table,$data)
    {
           $sql = "DELETE FROM $table WHERE $data";
           $res = mysqli_query($this->mysql(),$sql);
           if($res)
           {
               return true;
           }else
           {
              $this->error = mysqli_error();
              return false;
           }

    }

    /**
     * 根据条件查询数据单行
     * @param $table
     * @param int $where
     * @return array 一维数组
     */
    public function find($table,$where = 1)
    {
              $sql = "SELECT * FROM $table";
              if (is_array($where))
              {
                  $arrwhere = array();
                  foreach ($where as $key=>$val)
                  {
                      $arrwhere[] = "$key='$val'";
                  }
                  $sql .= ' WHERE '.implode( ' AND ',$arrwhere);
                  $sql .= ' LIMIT 1';
              }

             $res = mysqli_query($this->mysql(),$sql);
             if($res)
             {
                 $row = mysqli_fetch_assoc($res);
                 return $row;
             }else
             {
              $this->error = mysqli_error($this->mysql());
              return false;
             }
    }

    /**
     * 根据id修改数据
     * @param $table
     * @param  $upload $where
     * @return int/bool 成功返回受影响行数否则返回bool
     */
    public function save($table,$upload,$where)
    {
              $sql = "UPDATE $table SET";
              if (is_array($upload))
              {
                  foreach ($upload as $key=>$val)
                  {
                      $sql .= $key."='$val'";
                  }
                  $sql = substr($sql,0,-1);
              }
              if (is_string($where))
              {
                  $sql .= ' WHERE'.$where;
              }
              $res = mysqli_query($this->mysql(),$sql);
              if($res)
              {
                    return mysqli_affected_rows($res);
              }else
              {
                     $this->error = mysqli_error($this->mysql());
                     return false;
              }
    }

    /**
     * 查询所有的数据
     * @param $table
     * @param int $where
     * @return array 二维数组
     */
    public function select($table,$where = 1)
    {

          $sql = "SELECT * FROM $table WHERE $where";
          $res = mysqli_query($this->mysql(),$sql);

         if ($res)
          {

              while ($row = mysqli_fetch_assoc($res))
              {
                  $list[] = $row;
              }
              return $list;
          }else
          {
              $this->error = mysqli_error($this->mysql());
              return false;
          }
    }

    /**
     * 读取字段值
     * @param $table
     * @param $column
     * @param int $where
     * @param sting 某个字段值
     */
    public function getFind($table,$column,$where = 1)
    {
           $sql = "SELECT $column FROM $table WHERE $where";
           $res = mysqli_query($this->mysql(),$sql);
           if($res)
           {
               while ($row = mysqli_fetch_assoc($res))
               {
                   $list[] = $row;
               }

               return  $list;
           }else
           {
               $this->error = mysqli_error($this->mysql());
               return false;
           }
    }

    /**
     * 错误信息
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * 防止克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
?>