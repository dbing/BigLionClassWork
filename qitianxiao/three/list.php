<?php 
header("content-type:text/html;charset=utf-8;");
require "MySql.class.php";

$db = new MySql;
$sql = "SELECT * FROM demo";
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
		<td><?php echo $val['user'];?></td>
		<td><?php echo $val['pwd'];?></td>
		<td><a href="delete.php?id=<?php echo $val['id'];?>">删除</a><a href="updata.php?id=<?php echo $val['id']; ?>">修改</a></td>
	</tr>
	<?php } ?>
</table>