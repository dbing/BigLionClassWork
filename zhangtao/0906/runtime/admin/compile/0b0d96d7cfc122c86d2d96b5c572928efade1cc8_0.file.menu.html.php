<?php
/* Smarty version 3.1.30, created on 2017-09-07 22:32:11
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b1586b5dab46_00248267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0d96d7cfc122c86d2d96b5c572928efade1cc8' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\menu.html',
      1 => 1504794729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b1586b5dab46_00248267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="nav" id="side-menu">
					<li>
						<a href="index.php"><i class="fa fa-home fa-fw"></i>管理首页</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-user fa-fw"></i> 相册管理<span class="arrow glyphicon glyphicon-camera"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="photo_list.php">相册列表</a>
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
						<a href="#"><i class="fa fa-comment fa-fw"></i> 系统管理<span class="arrow glyphicon glyphicon-cog"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="setting.php">参数设置</a>
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
				</ul><?php }
}
