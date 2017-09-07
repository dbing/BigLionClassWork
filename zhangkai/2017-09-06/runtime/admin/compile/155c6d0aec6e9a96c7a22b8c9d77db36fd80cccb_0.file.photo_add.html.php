<?php
/* Smarty version 3.1.30, created on 2017-09-07 16:03:54
  from "D:\new\htdocs\htdocs\Homework\11day\admin\tpl\photo_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b151caa78f55_27096944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '155c6d0aec6e9a96c7a22b8c9d77db36fd80cccb' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\11day\\admin\\tpl\\photo_add.html',
      1 => 1504793034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navigater.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59b151caa78f55_27096944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <?php $_smarty_tpl->_subTemplateRender("file:navigater.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="page-wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">相片管理</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<form id="form1" action="photo_insert.php" method="post" role="form" enctype="multipart/form-data">

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>描述标签</label>
                    <input type="text" name="photo_name" class="form-control" value="" placeholder="图片标签"/>
                </div>

                <div class="form-group" style="width:180px;">
                    <label>请选择分类</label>
					<select name="cat_id" id="" class="form-control">
                        <option value="0">请选择...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_list']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</select>
                </div>

				<div class="form-group">
					<label for="docInputFile">上传照片</label>
					<input type="file" id="docInputFile" name="photo_path">
					<p class="help-block">上传文件限制在6M以内。</p>
				</div>

                <div class="form-group">
                    <label>简短描述</label>
                    <textarea class="form-control" rows="3" name="photo_desc"></textarea>
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
    <!-- 版权开始处 -->
    <?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
