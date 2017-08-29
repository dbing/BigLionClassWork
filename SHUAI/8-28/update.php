<?php
require "MySql.class.php";
$db = new MySql;
$id = $_GET['id'];
$sql = "SELECT * FROM cai WHERE id='$id'";
$info = $db->getRow($sql);
?>
<form action="up.php" method="post">
	<table>
		<tr>
			<td>用户</td>
			<td><input type="text" name="name" value="<?php echo $info['name'];?>"></td>
		</tr>
		<tr>
			<td>url</td>
			<td><input type="text" name="url" value="<?php echo $info['url'];?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $info['id'];?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
</form>