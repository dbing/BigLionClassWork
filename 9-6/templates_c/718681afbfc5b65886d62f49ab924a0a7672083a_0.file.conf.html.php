<?php
/* Smarty version 3.1.30, created on 2017-09-08 00:18:23
  from "D:\web\apache\htdocs\9-6\theme\conf.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b1714f5fa251_16276221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718681afbfc5b65886d62f49ab924a0a7672083a' => 
    array (
      0 => 'D:\\web\\apache\\htdocs\\9-6\\theme\\conf.html',
      1 => 1504801102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b1714f5fa251_16276221 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\web\\apache\\htdocs\\9-6\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 数组格式显示 -->
	  <?php echo $_smarty_tpl->tpl_vars['data']->value['1'];?>

	  <?php echo $_smarty_tpl->tpl_vars['data']->value['2'];?>

	  <!-- 配置显示 -->
	  <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "config.conf", null, 0);
?>

	  <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>

	  <!-- localhost -->
	  <?php echo $_SERVER['HTTP_HOST'];?>

	  <!-- 时间 -->
	  <?php echo time();?>

	  <!-- 格式化时间 -->
	  <?php echo smarty_modifier_date_format(time(),'%D');?>

	  <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

	  <!-- 修改name -->
	  <?php echo (($tmp = @$_GET['name'])===null||$tmp==='' ? 'no' : $tmp);?>

	  <?php if ($_smarty_tpl->tpl_vars['if']->value == '1') {?>
	  word
	  <?php }?>

</body>
</html><?php }
}
