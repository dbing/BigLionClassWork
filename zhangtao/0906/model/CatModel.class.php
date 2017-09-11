<?php
/**
 * @author 张涛 2017/09/08
 * @param  Model
 */

class CatModel
{
	protected $tableName = 'cat';   //表名
	protected $db;					//Mysql数据库对象
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
		$data['create_time'] = time();
		return $this->db->add($this->tableName, $data);
	}

	/**
	 * 查询多行
	 */
	public function select()
	{
		return $this->db->select($this->tableName);
	}
}