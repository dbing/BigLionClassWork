<?php
/* Smarty version 3.1.30, created on 2017-09-05 22:18:55
  from "D:\phpStudy\anzhuang\WWW\new-two\0905\theme\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aeb24f4434d9_38844839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34da2e5393cbfcb40215820dac1675ee8dffb6c0' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0905\\theme\\list.html',
      1 => 1504621134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aeb24f4434d9_38844839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表展示</title>
</head>
<body>
	<center>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>User</td>
				<td>Pwd</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['userpwd'];?>
</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</center>
</body>
</html><?php }
}
