<!-- 张志国 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="3.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>图片名称</td>
				<td><input type="text" name="imgName"></td>
			</tr>
			<tr>
				<td>图片</td>
				<td><input type="file" name='img[]' multiple='multiple'></td>
			</tr>
			<!-- <tr>
				<td>图片2</td>
				<td><input type="file" name='img[]'></td>
			</tr> -->
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>