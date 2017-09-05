<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:37:34
  from "E:\nne\htdocs\newdady\object\day10\tpl\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aea89e34c532_00819903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e4d6808bddac7784ac420a1458bd4fae62e0d0' => 
    array (
      0 => 'E:\\nne\\htdocs\\newdady\\object\\day10\\tpl\\admin_add.html',
      1 => 1504618639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aea89e34c532_00819903 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加</title>
</head>
<body>
<form action="add_action.php" method="post">
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="pwd"></td>
        </tr>
         <tr>
            <td>属性</td>
            <td><input type="text" name="img"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="添加"></td>
        </tr>
    </table>
</form>
</body>
</html><?php }
}
