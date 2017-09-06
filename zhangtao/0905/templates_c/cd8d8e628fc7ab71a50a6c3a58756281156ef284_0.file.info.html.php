<?php
/* Smarty version 3.1.30, created on 2017-09-05 23:08:56
  from "D:\phpStudy\anzhuang\WWW\new-two\0905\theme\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aebe088ab829_31841525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8d8e628fc7ab71a50a6c3a58756281156ef284' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0905\\theme\\info.html',
      1 => 1504624135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aebe088ab829_31841525 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0905\\smarty\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INFO</title>
</head>
<body>
	<h1>读取的数组</h1>
	<!-- 变量修饰器：upper（变换为大写） -->
	姓名：<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['info']->value['name'], 'UTF-8');?>
 <br>
	年龄：<?php echo $_smarty_tpl->tpl_vars['info']->value['age'];?>


	<h1>运算</h1>
	和：<?php echo $_smarty_tpl->tpl_vars['num']->value+$_smarty_tpl->tpl_vars['num2']->value;?>


	<hr />
	<h1>保留变量</h1>
	页码：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value)===null||$tmp==='' ? 5 : $tmp);?>
 <br>
	<!-- 变量修饰器：truncate（截取:格式） -->
	IP：<?php echo smarty_modifier_truncate($_SERVER['SERVER_NAME'],8,'-');?>


	<h1>循环</h1>
	<ul>
		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
		<li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
		<?php }
}
?>

	</ul>
</body>
</html><?php }
}
