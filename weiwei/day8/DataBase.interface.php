<?php 
interface DataBase
{
	public function add($table,$data);
	/**
	 * 删除数据
	 */
	public function delete($table,$where);

	/**
	 * 修改数据
	 */
	public function save($table,$where);

	/**
	 * 查询数据
	 */
	public function find($table,$where=1);

	/**
	 * 查询数据集
	 */
	public function select($table,$where=1);

	/**
	 * 读取字段值
	 */
	public function getField($table,$column,$where=1);
	
}

?>