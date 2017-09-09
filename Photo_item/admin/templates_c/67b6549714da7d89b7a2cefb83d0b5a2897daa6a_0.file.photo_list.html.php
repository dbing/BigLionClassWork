<?php
/* Smarty version 3.1.30, created on 2017-09-09 15:04:28
  from "D:\web\apache\htdocs\Photo_item\admin\tpl\photo_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b3927c644602_37378417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67b6549714da7d89b7a2cefb83d0b5a2897daa6a' => 
    array (
      0 => 'D:\\web\\apache\\htdocs\\Photo_item\\admin\\tpl\\photo_list.html',
      1 => 1504940531,
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
function content_59b3927c644602_37378417 (Smarty_Internal_Template $_smarty_tpl) {
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
		<h3 class="page-header">相片管理</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">

<!-- /.alert -->
        <div class="panel panel-default">
            <div class="panel-heading">
                相册列表
            </div><!--header-->                                                                                                                                  <div class="panel-body">
            <div class="panel-body">
                <div class="row">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th style="width: 60px;">编号</th>
							<th>名称</th>
							<!--<th style="width: 100px;">所属分类</th>-->
							<!--<th style="width: 100px;">是否公开</th>-->
							<th>预览</th>
							<th>创建时间</th>
							<th>管理操作</th>
						</tr>
						<!-- 循环开始处 -->
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['are']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['photo_id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['val']->value['photo_name'];?>
</td>
							<!--<td>战乱</td>-->
							<!--<td>已公开</td>-->
							<td><a href=""><img height="30px" width="50px" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['photo_path'];?>
" alt=""></a></td>
							<td><?php echo date('Y/m/d H:i:s',$_smarty_tpl->tpl_vars['val']->value['photo_time']);?>
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
	<!-- 版权开始处 -->
	<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
<?php }
}
