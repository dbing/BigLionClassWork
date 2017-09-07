<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:38:09
  from "E:\nne\htdocs\newdady\object\day10\tpl\admin_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea8c1ac6810_92220098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b40f88a612ba432ecde06c793269d7c498141479' => 
    array (
      0 => 'E:\\nne\\htdocs\\newdady\\object\\day10\\tpl\\admin_list.html',
      1 => 1504618688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aea8c1ac6810_92220098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3168359aea8c1a7c482_20467619';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>展示</title>
</head>
<body>
<table border="1">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
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
