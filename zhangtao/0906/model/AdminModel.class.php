<?php
defined('BIGLION') or die('Access denied :)_(:');

class AdminModel extends BaseModel
{
	protected $tableName = 'admin';

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