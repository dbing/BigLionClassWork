<?php
/* Smarty version 3.1.30, created on 2017-09-07 23:15:00
  from "D:\web\apache\htdocs\9-6\theme\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b16274db76a9_27022435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ac55e6d66deea3228cb93cfbc457924a4144b0' => 
    array (
      0 => 'D:\\web\\apache\\htdocs\\9-6\\theme\\show.html',
      1 => 1504797300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b16274db76a9_27022435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	    <table border="1">
	    	<tr>
	    		<td>name</td>
	    		<td>pwd</td>
	    	</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
	    	<tr>
	    		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
	    		<td><?php echo $_smarty_tpl->tpl_vars['val']->value['pwd'];?>
</td>
	    	</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    </table>
</body>
</html><?php }
}
