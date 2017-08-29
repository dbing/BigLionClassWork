<?php 
require "MySql.class.php";

$db = new MySql;
$sql = "SELECT * FROM student";
$list = $db->getAll($sql);
if(!$list){
	die($db->error);
}


?>

<table border="1">
	<?php foreach($list as $val){ ?>
	<tr>
		<td><?php echo $val['id'];?></td>
		<td><?php echo $val['name'];?></td>
		<td><?php echo $val['pwd'];?></td>
	</tr>
	<?php } ?>
</table>