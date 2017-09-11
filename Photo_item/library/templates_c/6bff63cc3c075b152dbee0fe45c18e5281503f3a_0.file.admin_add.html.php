<?php
/* Smarty version 3.1.30, created on 2016-12-16 14:39:52
  from "E:\wamp\www\1602php\1216_demo\tpl\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58538c389b16d5_81472484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bff63cc3c075b152dbee0fe45c18e5281503f3a' => 
    array (
      0 => 'E:\\wamp\\www\\1602php\\1216_demo\\tpl\\admin_add.html',
      1 => 1481870315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58538c389b16d5_81472484 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="add_action.php" method="post">
    <table>
        <tr>
            <td>User：</td>
            <td><input type="text" name="user" id=""></td>
        </tr>
        <tr>
            <td>Pwd:</td>
            <td><input type="text" name="pwd"></td>
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
