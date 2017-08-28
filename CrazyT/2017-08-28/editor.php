<?php 
require "MySql.class.php";
$db = new MySql;
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE id='$id'";
$info = $db->getRow($sql);
?>
<form action="update.php" method="post">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="user" value="<?php echo $info['user'];?>"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="password" name="pwd" id="" value="<?php echo $info['pwd'];?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $info['id'];?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
</form>