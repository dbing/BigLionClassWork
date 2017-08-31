<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
				<form action="picture.php" enctype="multipart/form-data" method="post">
					<table>
						<tr>
							<td>imgname:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>picture:</td>
							<td><input type="file" name="img[]"></td>
						</tr>
							<tr>
							<td>picture:</td>
							<td><input type="file" name="img[]"></td>
						</tr>
						<tr>
							<td><input type="submit"></td>
						</tr>
					</table>
				</form>
</body>
</html>
