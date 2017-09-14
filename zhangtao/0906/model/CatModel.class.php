<?php
defined('BIGLION') or die('Access denied :)_(:');
/**
 * @author 张涛 2017/09/08
 * @param  Model
 */

class CatModel extends BaseModel
{
	protected $tableName = 'cat';   //表名
	protected $db;					//Mysql数据库对象
	/**
	 * 添加
	 */
	public function insert($data)
	{
		$data['create_time'] = time();
		return $this->db->add($this->tableName, $data);
	}

}