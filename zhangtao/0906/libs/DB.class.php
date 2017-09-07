<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/07
 * @param  数据库接口  
 * @return NULL
 */

interface DB
{
	/**
	 * 添加数据
	 */
	public function add($table, $data);

	/**
	 * @param  删除数据
	 * @return int/bool 成功返回影响行数，失败返回bool 
	 */
	public function delete($table, $where);

	/**
	 * @param  修改数据
	 * @return int/bool 成功返回影响行数，失败返回bool 
	 */
	public function update($table, $data, $where);

	/**
	 * @param  查询单行
	 * @return array 
	 */
	public function find($table, $where = 1);

	/**
	 * @param  查询所有
	 * @return array 
	 */
	public function select($table, $where = 1);

	/**
	 * @param  获取字段值
	 * @return string 
	 */
	public function getField($table, $column, $where = 1);
}