<?php
/* Smarty version 3.1.30, created on 2017-09-13 19:22:55
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b9150ff29470_42651213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102dee507352722e328a4f572820972cc2310561' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\nav.html',
      1 => 1505228967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b9150ff29470_42651213 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
				<ul class="nav" id="side-menu">
					<li>
						<a href="index.php"><i class="fa fa-home fa-fw"></i>管理首页</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user fa-fw"></i> 相片管理<span class="arrow glyphicon glyphicon-camera"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="photo_list.php">照片列表</a>
							</li>
							<li>
								<a href="photo_add.php">上传照片</a>
							</li>
							<li>
								<a href="photo_recycle.php">回收站</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<li>
						<a href="#"><i class="fa fa-comment fa-fw"></i> 分类管理<span class="arrow glyphicon glyphicon-th-list"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="cat_add.php">添加分类</a>
							</li>
							<li>
								<a href="cat_list.php">分类列表</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<li>
						<a href="#"><i class="fa fa-comment fa-fw"></i> 账户管理<span class="arrow glyphicon glyphicon-user"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="admin_add.php">添加管理员</a>
							</li>
							<li>
								<a href="admin_list.php">管理员列表</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<li>
						<a href=""><i class="fa fa-comment fa-fw"></i> 系统管理<span class="arrow glyphicon glyphicon-cog"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="config.php">参数设置</a>
							</li>
							<li>
								<a href="#">个人信息</a>
							</li>
							<li>
								<a href="login.php?action=out">退出登录</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav><?php }
}
