<!-- 张志国 -->
<?php 

class MySql implements Say
{
	private $error = '';
    private static $instance;
    private $config = array();      // 数据库信息

	final private function __construct()
	{
       $this->config = require '../config/conf.php';

		$conn = @mysql_connect($this->config['db_host'].':'.$this->config['db_port'],$this->config['db_user'],$this->config['db_pwd']);
		
		if(!$conn)
		{
			die(mysql_error());
		}
		// 选库
		mysql_select_db($this->config['db_name']) or die(mysql_error());

		// 设置字符集
		mysql_query('set names '.$this->config['db_char']) or die(mysql_error());
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


	public function add($table,$data)
	{
		$sql = "INSERT INTO $table";
		$sql .= '('.implode(',', array_keys($data)).')';
		$sql .= ' VALUES ';
		$sql .= "('".implode("','", array_values($data))."')";
	
		$result = mysql_query($sql);
		if($result)
		{
			return mysql_insert_id();
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}
	}


	
	public function delete($table,$where)
	{

	}

	public function save($table,$where)
	{
		// update table set name='',sort='' where 
	}

	
	public function find($table,$where=1)
	{
		echo 'Find one';
	}

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


	public function getField($table,$column,$where=1)
	{

	}
	
	public function getError()
	{
		return $this->error;
	}
	private function __clone(){}

}


?>