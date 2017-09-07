<?php
/* Smarty version 3.1.30, created on 2017-09-07 15:07:36
  from "D:\new\htdocs\htdocs\Homework\11day\admin\tpl\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b14498b8bf83_33024378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a07c5aa7cc2aabba8b844340b86839ed6bc88be' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\11day\\admin\\tpl\\index.html',
      1 => 1481961688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59b14498b8bf83_33024378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>相册管理系统</title>
	<!-- Bootstrap Core CSS -->
	<link href="./tpl/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->

	<!-- jQuery -->
	<?php echo '<script'; ?>
 src="./tpl/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Bootstrap Core JavaScript -->
	<?php echo '<script'; ?>
 src="./tpl/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- Metis Menu Plugin JavaScript -->
	<?php echo '<script'; ?>
 src="./tpl/bootstrap/admin/metisMenu/metisMenu.min.js"><?php echo '</script'; ?>
>
	<!-- Custom Theme JavaScript -->
	<?php echo '<script'; ?>
 src="./tpl/bootstrap/admin/js/sb-admin-2.js"><?php echo '</script'; ?>
>
	<!-- Timeline CSS -->
	<link href="./tpl/bootstrap/admin/css/timeline.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="./tpl/bootstrap/admin/css/sb-admin-2.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">相册管理系统</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<!-- /.dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="login.php?action=out"><i class="fa fa-sign-out fa-fw"></i>退出登录</a>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<!-- 包含目录 -->
				<?php $_smarty_tpl->_subTemplateRender("file:menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">管理首页</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-user"></span>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">999</div>
							<div>账户数量</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href="#"><span class="pull-left">账户列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-comment">
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">888</div>
							<div>未读留言</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href="#"><span class="pull-left">留言列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<span class="arrow glyphicon glyphicon-camera">
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">333</div>
							<div>图片数量</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<a href=""><span class="pull-left">相册列表</span></a>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>	
	</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                留言列表
            </div>
            <!--header-->
            <div class="panel-body">
            <div class="panel-body">
				<div class="row">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th style="width: 60px;">编号</th>
							<th>标题</th>
							<th>Email</th>
							<th>是否查看</th>
							<th style="width: 180px;">添加时间</th>
						</tr>

						<tr>
							<td>1</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>未查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

						<tr>
							<td>2</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>未查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

						<tr>
							<td>3</td>
							<td><a href="shownotice.php?id=1">demo</a></td>
							<td>itbing@sina.cn</td>
							<td>已查看</td>
							<td>2015-10-19 00:44:49</td>
						</tr>

					</table>
				</div>
				 <div class="row" style="padding: 0px;">
                    <div class="col-sm-6">
                        <div>记录数：100 页数：1/50</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="margin: 0px;text-align: right">
                            <ul class="pagination" style="margin: 2px 0;">
								
                            </ul>
                        </div>
                    </div>
                </div><!-- /.row -->
	    </div><!-- /.panel-body -->
        </div><!-- /.panel -->
</div>
<!-- 版权开始处 -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
