<?php
defined('BIGLION') or die('Access denied :)_(:');
/**
 * @author 张涛 2017/09/13
 * @param  基类model
 */

class BaseModel
{
	protected $tableName; //表名
	protected $db;		  //数据库对象
	//构造函数
	public function __construct()
	{
		$this->db = $GLOBALS['db'];
	}

	/**
	 * 添加
	 */
	public function insert($data)
	{
		$res = $this->db->add($this->tableName, $data);
		if($res === false)
		{
			return $this->db->getError();
		}
		return $res;
	}
	
	/**
	 * 查询多行
	 */
	public function select($where = 1)
	{
		return $this->db->select($this->tableName, $where);
	}

	/**
	 * 统计
	 */
	public function count()
	{
		return $this->db->count($this->tableName);
	}
}