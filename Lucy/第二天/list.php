<?php 
require "MySql.class.php";
header('content-type:text/html;charset=utf-8');

$db = new MySql;
$sql = "SELECT * FROM student";
$list = $db->getAll($sql);
if(!$list)
{
	die($db->error);
}


?>

<table border="1">
	<?php foreach($list as $val){ ?>
	<tr>
		<td><?php echo $val['uid'];?></td>
		<td><?php echo $val['user_name'];?></td>
		<td><?php echo $val['user_class'];?></td>
	</tr>
	<?php } ?>
</table>