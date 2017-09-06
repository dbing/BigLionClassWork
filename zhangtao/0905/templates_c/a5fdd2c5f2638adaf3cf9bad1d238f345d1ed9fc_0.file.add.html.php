<?php
/* Smarty version 3.1.30, created on 2017-09-05 21:24:27
  from "D:\phpStudy\anzhuang\WWW\new-two\0905\theme\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea58b3545c3_96819149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5fdd2c5f2638adaf3cf9bad1d238f345d1ed9fc' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0905\\theme\\add.html',
      1 => 1504617864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aea58b3545c3_96819149 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加</title>
</head>
<body>
	<center>
		<form action="do_add.php" method="post">
			<table>
				<tr>
					<td>User</td>
					<td><input type="text" name='username'></td>
				</tr>
				<tr>
					<td>Pwd</td>
					<td><input type="password" name='userpwd'></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="添加"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html><?php }
}
