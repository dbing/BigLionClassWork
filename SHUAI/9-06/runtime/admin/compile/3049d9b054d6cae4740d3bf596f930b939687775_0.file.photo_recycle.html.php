<?php
/* Smarty version 3.1.30, created on 2017-09-07 15:18:49
  from "E:\wamp64\www\9yue\BigLionClassWork\SHUAI\9-06\admin\tpl\photo_recycle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b16359c521e5_47729309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3049d9b054d6cae4740d3bf596f930b939687775' => 
    array (
      0 => 'E:\\wamp64\\www\\9yue\\BigLionClassWork\\SHUAI\\9-06\\admin\\tpl\\photo_recycle.html',
      1 => 1504797529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.html' => 1,
    'file:nav.html' => 1,
  ),
),false)) {
function content_59b16359c521e5_47729309 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div id="wrapper">
	<!-- Navigation -->
	<?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-wrapper">
<form id="form1" runat="server">
<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">相册管理</h3>
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
							<th>标签</th>
							<th style="width: 100px;">所属分类</th>
							<th style="width: 100px;">是否公开</th>
							<th>预览</th>
							<th>创建时间</th>
							<th>管理操作</th>
						</tr>
						<!-- 循环开始处 -->
						<tr>
							<td>1</td>
							<td>测试</td>
							<td>战乱</td>
							<td>已公开</td>
							<td><a href=""><img src="" alt=""></a></td>
							<td>2015-11-22 23:18:48</td>
							<td>
								
							<a href=""><i class="fa fa-edit"></i>编辑</a> |
							<a href=""><i class="fa fa-times"></i>删除</a>
							</td>
						</tr>
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
<?php }
}
