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

	/**
	 * 检测是否登录
	 */
	public function checkLogin($name, $pwd)
	{
		$map = [
			'admin_name' => $name,
			'admin_pwd'	 => $pwd,
		];
		return $this->db->find($this->tableName, $map);
	}

	/**
	 * 修改
	 */
	public function updateLogin($adminId)
	{
		$arr = [
			'last_time'	=> time(),
			'last_ip'	=> getClientIp(), 
		];
		$where = " admin_id = '$adminId' ";
		return $this->db->update($this->tableName, $arr, $where);
	}
}