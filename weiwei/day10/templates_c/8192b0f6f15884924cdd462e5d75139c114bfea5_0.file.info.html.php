<?php
/* Smarty version 3.1.30, created on 2017-09-05 15:50:39
  from "D:\new\htdocs\htdocs\Homework\10day\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aeabafa5e813_40046584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8192b0f6f15884924cdd462e5d75139c114bfea5' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\10day\\info.html',
      1 => 1504619430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:foot.html' => 1,
  ),
),false)) {
function content_59aeabafa5e813_40046584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>数组的读取</h1>
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['sname'];?>
</h1>
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['pwd'];?>
</h1>

    <h1>读取配置文件</h1>

    <?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'name');?>

    <p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</p>

    <h1><?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</h1>
    <hr>
    <h1>保留变量</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <p><?php echo (($tmp = @$_GET['page'])===null||$tmp==='' ? '' : $tmp);?>
</p>
    <p><?php echo $_SERVER['HTTP_HOST'];?>
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
    <?php if ($_smarty_tpl->tpl_vars['sex']->value == '男') {?>睡个<?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php echo '<script'; ?>
>
    
    function hi() {
        alert(1111);
    }
    
<?php echo '</script'; ?>
>
</html><?php }
}
