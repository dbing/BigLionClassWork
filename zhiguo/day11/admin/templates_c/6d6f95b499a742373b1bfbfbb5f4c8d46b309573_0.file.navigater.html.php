<?php
/* Smarty version 3.1.30, created on 2017-09-07 17:12:24
  from "E:\nne\htdocs\newdady\object\day11\admin\tpl\navigater.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b161d85015f8_19656196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d6f95b499a742373b1bfbfbb5f4c8d46b309573' => 
    array (
      0 => 'E:\\nne\\htdocs\\newdady\\object\\day11\\admin\\tpl\\navigater.html',
      1 => 1481961604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.html' => 1,
  ),
),false)) {
function content_59b161d85015f8_19656196 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">相册管理系统</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>退出登录</a>
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
</nav><?php }
}
