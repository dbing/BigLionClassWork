<?php
class Mysql
{
    //构造方法
    public function __construct(){
        @mysql_connect('127.0.0.1','root','');
        @mysql_select_db('2017');
        mysql_query('set names utf8');
    }
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

    public function del($sql)
    {
        if($sql)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function get_row($sql)
    {
       $res = mysql_query($sql);
        if($res)
        {
            return mysql_fetch_assoc($res);
        }
        else
        {
            return false;
        }
    }

    public function do_update($sql)
    {
        $info = mysql_query($sql);
        if($info)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

$db = new Mysql;
$sql  = "select * from student";
$list = $db->show($sql);
?>
<table border="1">
    <tr>
        <td>姓名</td>
        <td>密码</td>
        <td>操作</td>
    </tr>
    <?php foreach($list  as $key =>$v) { ?>
        <tr>
            <td><?php echo $v['user'];?></td>
            <td><?php echo $v['pwd'];?></td>
            <td>
                <a href="delete.php?id=<?php echo $v['id']?>">删除</a>
                <a href="update.php?id=<?php echo $v['id']?>">修改</a>
            </td>
        </tr>
    <?php } ?>
</table>