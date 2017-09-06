<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
		<body>
			<form action="picture.php" enctype="multipart/form-data" method="post">
				<table>
					<tr>
						<td>name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>img:</td>
						<td><input type="file" name="img[]"></td>
					</tr>
					<tr>
						<td><input type="submit" value="提交"></td>
					</tr>
				</table>
			</form>
		</body>
</html>
