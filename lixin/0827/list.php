<?php
require "MySql.class.php";
$db = new Mysql;
$sql = "select * from user";
$list = $db->getAll($sql);
if(!$list)
{
    die($db->error);
}
?>
<table border="1">
    <?php foreach($list as $v){?>
        <tr>
            <td><?php echo $v['id'];?></td>
            <td><?php echo $v['user'];?></td>
            <td><?php echo $v['pwd'];?></td>
            <td><a href="delete.php?id=<?php echo $v['id'];?>">删除</a></td>
            <td><a href="date.php?id=<?php echo $v['id'];?>">修改</a></td>
        </tr>
    <?php }?>
</table>