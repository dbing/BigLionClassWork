<?php 
require "MySql.class.php";
header("content-type:text/html;charset=utf-8");

$db = new MySql;
$sql = "SELECT * FROM user";
$list = $db->getAll($sql);
if(!$list)
{
	die($db->error);
}

?>

<table border="1">
	<?php foreach($list as $val){ ?>
	<tr>
		<td><?php echo $val['id'];?></td>
		<td><?php echo $val['name'];?></td>
		<td><?php echo $val['pwd'];?></td>
		<td><a href="delete.php?id=<?php echo $val['id'];?>">删除</a> </td>
		<td><a href="editor.php?id=<?php echo $val['id'];?>">修改</a> </td>
	</tr>
	<?php } ?>
</table>