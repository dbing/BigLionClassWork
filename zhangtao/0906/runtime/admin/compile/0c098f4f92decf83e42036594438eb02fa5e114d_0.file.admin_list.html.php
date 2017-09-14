<?php
/* Smarty version 3.1.30, created on 2017-09-13 19:38:15
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\admin_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b918a715cb47_06432970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c098f4f92decf83e42036594438eb02fa5e114d' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\admin_list.html',
      1 => 1505038818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:nav.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59b918a715cb47_06432970 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-wrapper">
<form id="form1" runat="server">
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">账户管理</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">

<!-- /.alert -->
        <div class="panel panel-default">
            <div class="panel-heading">
                账户列表
            </div><!--header-->                                                                                                                                  <div class="panel-body">
            <div class="panel-body">
                <div class="row">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th style="width: 60px;">编号</th>
							<th>用户名</th>
							<th style="width: 100px;">是否锁定</th>
							<th>创建时间</th>
							<th>管理操作</th>
						</tr>
						<!-- 循环开始处 -->
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminList']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['admin_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['admin_name'];?>
</td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?>
									<font color="red">已锁定</font></td>
								<?php } else { ?>
									<font color="green">未锁定</font>
								<?php }?>
							</td>
							<td><?php echo date('Y/m/d H:i:s',$_smarty_tpl->tpl_vars['val']->value['create_time']);?>
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
                        <div>记录数：<?php echo '<?=';?>$total<?php echo '?>';?> 页数：<?php echo '<?=';?>$p<?php echo '?>';?>/<?php echo '<?=';?>$p_count<?php echo '?>';?></div>
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
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	function del(pid)
	{
		var xhr = new XMLHttpRequest();
		xhr.open('get','ajax.php?action=luoji_del&pid=' + pid);
		xhr.send(null);
		xhr.onreadystatechange = function ()
		{
			if(xhr.readyState == 4 && xhr.status == 200)
			{
				var res = xhr.responseText;
				if(res)
				{
					window.location.reload();
				}
				else
				{
					alert('Error 操作失败！');
				}

			}
		}
	}
<?php echo '</script'; ?>
>
<!-- 版权开始处 -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
