<?php 
require "MySql.class.php";

$db = new MySql;
header('content-type:text/html;charset = utf8');
$id = $_GET['id'];
$sql = "SELECT * FROM student WHERE uid='$id'";
$info = $db->getRow($sql);
// var_dump($info);
?>
<form action="update.php" method="post">
	<table>
		<tr>
			<td>用户名：</td>
			<td><input type="text" name="user_name" value="<?php echo $info['user_name'];?>"></td>
		</tr>
		<tr>
			<td>班级：</td>
			<td><input type="text" name="user_class" id="" value="<?php echo $info['user_class'];?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="uid" value="<?php echo $info['uid'];?>"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
	</table>
</form>