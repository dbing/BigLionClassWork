<?php
header("content-type:text/html;charset=utf-8");
require "1.php";
$id = $_GET['id'];

$sql = "select * from user where id='$id'";
$res = $db->getOne($sql);

if(!$res){
	echo $db->error();
	echo '修改失败';
}
?>

<center>
	<form action="dosave.php" method="post">
		<table>
			<tr align="center">
				<td>用户名</td>
				<td><input type="text" name="username" value="<?= $res['username']?>"></td>
			</tr>
			<input type="hidden" name="id" value="<?= $res['id']?>">
			<tr align="center">
				<td>密码</td>
				<td><input type="text" name="userpwd" value="<?= $res['userpwd']?>"></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" value="确认修改"></td>			
			</tr>
		</table>
	</form>
</center>
