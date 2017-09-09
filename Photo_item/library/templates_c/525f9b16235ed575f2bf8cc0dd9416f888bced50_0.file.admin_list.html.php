<?php
/* Smarty version 3.1.30, created on 2016-12-16 14:53:39
  from "E:\wamp\www\1602php\1216_demo\tpl\admin_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58538f736ce514_04740345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525f9b16235ed575f2bf8cc0dd9416f888bced50' => 
    array (
      0 => 'E:\\wamp\\www\\1602php\\1216_demo\\tpl\\admin_list.html',
      1 => 1481871218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58538f736ce514_04740345 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table border="1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stu_list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['user'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['pwd'];?>
</td>
        <td>删除</td>
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
