<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $管理员的model
 * Date: 2017/9/9
 * Time: 11:39
 */
class AdminModel
{
    protected $tabla = 'admin'; //数据库表明
    protected $db;
    public function __construct()
    {
        $this->db = $GLOBALS['db'];
    }

    /**
     * 添加
     * @param $data
     * @return mixed
     */
    public function add($data)
    {
        $data['register_time'] = time();
        return $this->db->add($this->tabla,$data);
    }

    /**
     * 查询多行
     * @return mixed
     */
    public function select()
    {
        return $this->db->select($this->tabla);
    }
    public function find()
    {

    }
    public function save()
    {

    }
    public function delete()
    {

    }
}
?>