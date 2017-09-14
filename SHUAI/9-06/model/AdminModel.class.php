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
     * 查登录
     */
   public function checkLogin($name,$password)
   {
       $map = array('admin_name'=>$name,'password'=>$password);
       return $this->db->find($this->tabla,$map);
   }
   public function updateLogin($admin_id)
   {
         $updateData = array(
             'last_time' => time(),
             'last_ip'  => getIp()
         );
         $where = "admin_id='$admin_id'";
          return $this->db->save($this->tabla,$updateData,$where);
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