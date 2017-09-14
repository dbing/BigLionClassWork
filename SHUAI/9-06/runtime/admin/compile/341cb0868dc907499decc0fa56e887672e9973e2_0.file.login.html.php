<?php
/* Smarty version 3.1.30, created on 2017-09-13 11:45:37
  from "E:\wamp64\www\9yue\BigLionClassWork\SHUAI\9-06\admin\tpl\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b91a61d65e69_99688266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '341cb0868dc907499decc0fa56e887672e9973e2' => 
    array (
      0 => 'E:\\wamp64\\www\\9yue\\BigLionClassWork\\SHUAI\\9-06\\admin\\tpl\\login.html',
      1 => 1505227637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b91a61d65e69_99688266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">用户登录</h3>
                    </div>
                    <div class="panel-body">
                        <!-- 错误消息输出 -->
                        <form id="form1" action="login.php?action=checkLogin" method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="admin_name" maxlength="16" class="form-control" placeholder="用户名" />
                                </div>
                                <div class="form-group">
                                    <input type="password" name="psaaword" maxlength="16" class="form-control" placeholder="密码" />
                                </div>
                                <a id="btnLogin"  class="btn btn-lg btn-success btn-block">登录</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="./tpl/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="./tpl/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- MetisMenu CSS -->
<link href="./tpl/bootstrap/admin/metisMenu/metisMenu.min.js" rel="stylesheet">

<?php echo '<script'; ?>
 type="text/javascript">
$(function ()
{
	$('#btnLogin').click(function() {
		$('#form1').submit();
	});
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
