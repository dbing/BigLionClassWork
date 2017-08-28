<?php 
require "MySql.class.php";
$db = new MySql;
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id='$id'";
$res = $db->delete($sql);
if($res === false)
{
	echo '删除失败';
}
else
{
	echo '删除成功';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>列1</td>
			<td>列2</td>
			<td>列3</td>
			<td>列4</td>
		</tr>
		<tr>
			<td>列1</td>
			<td>列2</td>
			<td>列3</td>
			<td>列4</td>
		</tr>
		<tr>
			<td>列1</td>
			<td>列2</td>
			<td>列3</td>
			<td>列4</td>
		</tr>
	</table>
</body>
</html>