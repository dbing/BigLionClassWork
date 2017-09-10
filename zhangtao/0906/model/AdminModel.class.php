<?php


class AdminModel
{
	protected $db;
	protected $tableName = 'admin';
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
		if($res)
		{
			return $this->db->getError();
		}
		return $res;
	}

	/**
	 * 查询
	 */
	public function select()
	{
		return $this->db->select($this->tableName);
	}
}