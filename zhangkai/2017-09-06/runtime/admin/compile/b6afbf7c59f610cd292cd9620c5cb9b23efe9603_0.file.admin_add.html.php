<?php
/* Smarty version 3.1.30, created on 2017-09-11 13:26:21
  from "D:\new\htdocs\htdocs\Homework\11day\admin\tpl\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b672dd710ca2_63234968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6afbf7c59f610cd292cd9620c5cb9b23efe9603' => 
    array (
      0 => 'D:\\new\\htdocs\\htdocs\\Homework\\11day\\admin\\tpl\\admin_add.html',
      1 => 1505129165,
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
function content_59b672dd710ca2_63234968 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h3 class="page-header">账户管理</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<form id="form1" action="admin_insert.php" method="post" role="form" enctype="multipart/form-data">

    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>管理员账户</label>
                    <input type="text" name="admin_name" class="form-control" value="" placeholder="UserName" />
                </div>
                <div class="form-group">
                    <label>密码</label>
                    <input type="password" name="password" class="form-control" value="" placeholder="Password" />
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="password" name="res" class="form-control" value="" placeholder="ConfirmPassword"  />
                </div>

                <div class="form-group">
                    <label>帐号类型</label>
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="status" value="1" /> 锁定
                        </label>
                    </div>
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
}
}
