<?php
/* Smarty version 3.1.30, created on 2017-09-06 18:39:27
  from "E:\web\WWW\zuoye123456\day10\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afd05f2c1db5_25918683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c73d9cb8f79892b8959269f16e97bea45a6dedc9' => 
    array (
      0 => 'E:\\web\\WWW\\zuoye123456\\day10\\admin_add.html',
      1 => 1504615789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59afd05f2c1db5_25918683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <form action="add_action.php" method="post">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="sname"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td><input type="submit" value="确认提交"></td>
            <td></td>
        </tr>
    </form>
</table>
</body>
</html><?php }
}
