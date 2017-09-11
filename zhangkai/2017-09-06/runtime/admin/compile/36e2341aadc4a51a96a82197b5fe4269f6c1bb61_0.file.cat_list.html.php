<?php
/* Smarty version 3.1.30, created on 2017-09-11 12:52:32
  from "D:\new\htdocs\htdocs\Homework\11day\admin\tpl\cat_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b66af0bfd739_13975262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e2341aadc4a51a96a82197b5fe4269f6c1bb61' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\11day\\admin\\tpl\\cat_list.html',
      1 => 1482116680,
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
function content_59b66af0bfd739_13975262 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\new\\htdocs\\htdocs\\Homework\\11day\\libs\\smarty\\plugins\\modifier.date_format.php';
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
<form id="form1" runat="server">
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">分类管理</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">

<!-- /.alert -->
        <div class="panel panel-default">
            <div class="panel-heading">
                分类列表
            </div><!--header-->                                                                                                                                  <div class="panel-body">
            <div class="panel-body">
                <div class="row">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th style="width: 60px;">编号</th>
							<th>分类名</th>
							<th style="width: 100px;">父分类</th>
							<th>排序</th>
							<th>创建时间</th>
							<th>管理操作</th>
						</tr>
						<!-- 循环开始处 -->
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catList']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['parent_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['sort_order'];?>
</td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['add_time'],"%D");?>
</td>
							<td>
								
							<a href=""><i class="fa fa-edit"></i>编辑</a> |
							<a href=""><i class="fa fa-times"></i>删除</a>
							</td>
						</tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<!-- 循环结束处 -->

					</table>
                </div><!-- /.row -->
		        <div class="row" style="padding: 0px;">
                    <div class="col-sm-6">
                        <div>记录数：100 页数：10/1</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="margin: 0px;text-align: right">
                            <ul class="pagination" style="margin: 2px 0;">

								<li class="active"><a href="1">1</a></li>
								<li ><a href="1">2</a></li>
								<li ><a href="1">3</a></li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</form>
	<!-- 版权开始处 -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript">
<?php echo '</script'; ?>
>
<?php }
}
