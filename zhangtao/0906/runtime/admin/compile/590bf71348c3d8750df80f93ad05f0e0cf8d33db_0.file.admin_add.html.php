<?php
/* Smarty version 3.1.30, created on 2017-09-13 19:35:30
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b91802364f60_76932544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590bf71348c3d8750df80f93ad05f0e0cf8d33db' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\admin_add.html',
      1 => 1505038117,
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
function content_59b91802364f60_76932544 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <input type="password" name="admin_pwd" class="form-control"  placeholder="Password" />
                </div>
                <div class="form-group">
                    <label>确认密码</label>
                    <input type="password" class="form-control" placeholder="ConfirmPassword"  />
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
