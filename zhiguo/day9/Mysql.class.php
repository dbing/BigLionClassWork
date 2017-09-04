<!-- 张志国 -->
<?php 
include ('Say.Interface.php');
class MySql implements Say
{
	// 错误消息
	private $error = '';
	private static $instance;
	final private function __construct()
	{
		@mysql_connect('127.0.0.1','root','');
		
		// 选库
		@mysql_select_db('2017');

		// 设置字符集
		mysql_query('set names utf8');
	}
	static function getInstance(){
		if(self::$instance instanceof self){
			return self::$instance;
		}else{
			return self::$instance=new Mysql;
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
	private function __clone();

}


?>