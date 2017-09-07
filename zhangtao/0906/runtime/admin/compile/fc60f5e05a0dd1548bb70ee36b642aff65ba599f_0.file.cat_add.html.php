<?php
/* Smarty version 3.1.30, created on 2017-09-07 22:29:37
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\cat_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b157d1eb95b9_08226711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc60f5e05a0dd1548bb70ee36b642aff65ba599f' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\cat_add.html',
      1 => 1504794572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:menu.html' => 1,
  ),
),false)) {
function content_59b157d1eb95b9_08226711 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3 class="page-header">分类管理</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<form id="form1" action="project_insert.php" method="post" role="form" enctype="multipart/form-data">

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>分类名称</label>
                    <input type="text" name="title" class="form-control" value="" placeholder="分类名"/>
                </div>

                <div class="form-group" style="width:180px;">
                    <label>请选择父分类</label>
					<select name="sid" id="" class="form-control">
						<option value="0">请选择...</option>
                        <option value="0">测试类</option>
					</select>
                </div>

                <div class="form-group">
                    <label>分类排序</label>
                    <input type="text" name="title" class="form-control" value="" placeholder="排序"/>
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
