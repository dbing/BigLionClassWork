<?php
/* Smarty version 3.1.30, created on 2017-09-07 23:03:47
  from "D:\web\apache\htdocs\9-6\theme\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b15fd3358b44_86280266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d76384549bc0f3089ae5435e6eb8f054298d5e' => 
    array (
      0 => 'D:\\web\\apache\\htdocs\\9-6\\theme\\add.html',
      1 => 1504796626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b15fd3358b44_86280266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	   <form action="create_add.php" method="post">
	   	<table>
	   		<tr>
	   			<td>name</td>
	   			<td><input type="text" name="name"></td>
	   		</tr>
	   		<tr>
	   			<td>pwd</td>
	   			<td><input type="password" name="pwd"></td>
	   		</tr>
	   		<tr>
	   			<td><input type="submit"></td>
	   			<td></td>
	   		</tr>
	   	</table>
	   </form>
</body>
</html><?php }
}
