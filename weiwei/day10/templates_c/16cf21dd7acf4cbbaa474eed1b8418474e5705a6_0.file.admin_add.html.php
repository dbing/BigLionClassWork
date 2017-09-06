<?php
/* Smarty version 3.1.30, created on 2017-09-05 14:50:09
  from "D:\new\htdocs\htdocs\Homework\10day\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae9d816b1109_69754558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16cf21dd7acf4cbbaa474eed1b8418474e5705a6' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\10day\\admin_add.html',
      1 => 1504615789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ae9d816b1109_69754558 (Smarty_Internal_Template $_smarty_tpl) {
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
