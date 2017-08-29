<?php
/**
 * SHUAI
 * 文件上传
 * 19:36
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>图片</td>
				<td><input type="file" name="img"></td>
			</tr>
	         <tr>
				<td></td>
				<td><input type="submit" value="上传"></td>
			</tr>
		</table>
	</form>
</body>
</html>