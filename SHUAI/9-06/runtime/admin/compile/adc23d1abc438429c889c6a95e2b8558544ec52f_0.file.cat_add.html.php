<?php
/* Smarty version 3.1.30, created on 2017-09-09 02:25:09
  from "E:\wamp64\www\9yue\BigLionClassWork\SHUAI\9-06\admin\tpl\cat_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b35105b3c5c3_92575129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc23d1abc438429c889c6a95e2b8558544ec52f' => 
    array (
      0 => 'E:\\wamp64\\www\\9yue\\BigLionClassWork\\SHUAI\\9-06\\admin\\tpl\\cat_add.html',
      1 => 1504923807,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:nav.html' => 1,
  ),
),false)) {
function content_59b35105b3c5c3_92575129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">分类管理</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<form id="form1" action="cat_insert.php" method="post" role="form" enctype="multipart/form-data">

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>分类名称</label>
                    <input type="text" name="cat_name" class="form-control" value="" placeholder="分类名"/>
                </div>

                <div class="form-group" style="width:180px;">
                    <label>请选择父分类</label>
					<select name="partend_id" id="" class="form-control">
						<option value="0">请选择...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
                </div>

                <div class="form-group">
                    <label>分类排序</label>
                    <input type="text" name="sort_order" class="form-control" value="" placeholder="排序"/>
                </div>

                <input type="submit" class="btn btn-primary" value="　提交　" />
                <input id="btnClear" type="reset" class="btn btn-default" value="　重置　" />
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
<?php }
}
