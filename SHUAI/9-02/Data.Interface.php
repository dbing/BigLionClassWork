<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date    : 2017/9/1 0001
 * Time    : 19:44
 */
interface Date
{
    /**
     * 添加单条数据
     * @param $table
     * @param $data
     * @return int/bool 成功返回自增ID否则返回bool
     */
    public function add($table,$data);

    /**
     * 根据条件删除数据
     * @param $table
     * @param $data
     * @return int/bool 成功返回受影响行数否则返回bool
     */
    public function delete($table,$data);

    /**
     * 根据条件查询数据单行
     * @param $table
     * @param int $where
     * @return array 一维数组
     */
    public function find($table,$where = 1);

    /**
     * 根据id修改数据
     * @param $table
     * @param $where
     * @return int/bool 成功返回受影响行数否则返回bool
     */
    public function save($table,$upload,$where);

    /**
     * 查询所有的数据
     * @param $table
     * @param int $upload $where
     * @return array 二维数组
     */
    public function select($table,$where = 1);

    /**
     * 读取字段值
     * @param $table
     * @param $column
     * @param int $where
     * @param sting 某个字段值
     */
    public function getFind($table,$column,$where = 1);
}
?>