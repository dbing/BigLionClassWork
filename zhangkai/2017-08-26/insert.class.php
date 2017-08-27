<?php
/*
 * 添加
 *
 * 展示
 *
 * */
class Mysql
{
    //构造方法
    public function __construct(){
        $res = mysql_connect('localhost:3306','root','123456');
        mysql_select_db('boke');
        mysql_query('set names utf8');
    }

//    //添加
//    public function insert($sql)
//    {
//       return $result = mysql_query($sql);
//    }

    //展示
    public function show($sql)
    {
        $data = mysql_query($sql);
        if($data)
        {
            $list = array();
            while($row = mysql_fetch_assoc($data)){
                $list[] = $row;
            }
            return $list;
        }
        else
        {
            $this->error = mysql_error();
            return false;
        }
    }
}

$db = new Mysql;
$sql  = "select * from psd";
//$sql = "insert into psd(username,pwd) VALUES ('xiaozhang','18')";
//$db -> insert($sql);
$list = $db->show($sql);
?>
<table border="1">
    <tr>
        <td>姓名</td>
        <td>密码</td>
    </tr>
    <?php foreach($list  as $key =>$v) { ?>
        <tr>
            <td><?php echo $v['username'];?></td>
            <td><?php echo $v['pwd'];?></td>
        </tr>
    <?php } ?>
</table>