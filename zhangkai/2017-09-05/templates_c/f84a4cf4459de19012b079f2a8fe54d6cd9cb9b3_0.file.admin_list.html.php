<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:09:33
  from "D:\new\htdocs\htdocs\Homework\10day\admin_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea20d8253a5_56078195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f84a4cf4459de19012b079f2a8fe54d6cd9cb9b3' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\10day\\admin_list.html',
      1 => 1504616963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aea20d8253a5_56078195 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pwd'];?>
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
