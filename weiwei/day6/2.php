<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="to.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>图片名称</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>图片1</td>
				<td><input type="file" name='photo[]' multiple="multiple"  ></td>
			</tr> 
<!-- 			<tr>
				<td>图片2</td>
				<td><input type="file" name='pic'></td>
			</tr> -->
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>