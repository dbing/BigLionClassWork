<?php
/* Smarty version 3.1.30, created on 2017-09-05 16:13:36
  from "E:\nne\htdocs\newdady\object\day10\tpl\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aeb1108e8944_43467306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd6ed3ed4d3e60bef062a86f5e70476b1d141828' => 
    array (
      0 => 'E:\\nne\\htdocs\\newdady\\object\\day10\\tpl\\info.html',
      1 => 1504620815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_59aeb1108e8944_43467306 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\nne\\htdocs\\newdady\\object\\day10\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\nne\\htdocs\\newdady\\object\\day10\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>数组的读取</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['info']->value['age'];?>
</p>

    <h1>读取配置文件</h1>
    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "cfg.conf", null, 0);
?>

    <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'name');?>

    <p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</p>

    <h1><?php echo "this is ".((string)$_smarty_tpl->tpl_vars['sex']->value);?>
</h1>
    <h1>运算</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['num1']->value+$_smarty_tpl->tpl_vars['num2']->value;?>
</p>
    <hr>
    <h1>保留变量</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <p><?php echo (($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp);?>
</p>
    <p><?php echo smarty_modifier_truncate($_SERVER['HTTP_HOST'],8,'-');?>
</p>
    <p><?php echo smarty_modifier_date_format(time(),'%D');?>
</p>

    <h1>for</h1>
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
    <?php if ($_smarty_tpl->tpl_vars['sex']->value == '男') {?>帅哥<?php }?>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

<?php echo '<script'; ?>
>
    
//    function hi(){alert('hi');}
    

    hi();
<?php echo '</script'; ?>
>
</html><?php }
}
