<?php
header("content-type:text/html;charset=utf-8");
require "1.php";

$sql = 'select * from user';
$res = $db->select($sql);
?>

<center>
	<table border="1">
	<?php foreach($res as $v){ ?>
		<tr>
			<td><?= $v['username']?></td>
			<td><?= $v['userpwd']?></td>
			<td><a href="del.php?id=<?= $v['id']?>">删除</a></td>
			<td><a href="save.php?id=<?= $v['id']?>">修改</a></td>
		</tr>
	<?php } ?>
	</table>
</center>