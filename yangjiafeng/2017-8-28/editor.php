<?php 
require "MySql.class.php";
header("content-type:text/html;charset=utf-8");

$db = new MySql;

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$info = $db->getRow($sql);
// var_dump($info);
?>
<form action="update.php" method="post">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="name" value="<?php echo $info['name'];?>"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td><input type="text" name="pwd" value="<?php echo $info['pwd'];?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $info['id'];?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
</form>