<?php
/* Smarty version 3.1.30, created on 2017-09-13 23:01:13
  from "D:\phpStudy\anzhuang\WWW\new-two\0906\admin\tpl\config.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b948397d9535_35196805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9774eea44623c5b082d22ee88fb3abc5f3ca5ad3' => 
    array (
      0 => 'D:\\phpStudy\\anzhuang\\WWW\\new-two\\0906\\admin\\tpl\\config.html',
      1 => 1505270036,
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
function content_59b948397d9535_35196805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">系统设置</h3>
  </div>
  <!-- /.col-lg-12 -->

</div>

<div class="row">

<div class="col-lg-12">
<form id="form1" action="config.php?action=update" method="post" role="form" enctype="multipart/form-data">

<div class="row">
    <!-- 设置导航标签  -->

    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="javascript:void(0);">基本设置</a></li>
      <li role="presentation"><a href="javascript:void(0);">验证码设置</a></li>
      <li role="presentation"><a href="javascript:void(0);">上传设置</a></li>
    </ul>    
</div>    

<div class="row">
    <!-- 基本设置  -->
    <div class="panel panel-default">
        <div class="panel-heading">站点设置</div>
        <div class="panel-body">
            <div class="col-lg-6">

                <div class="form-group">
                    <label>网站名称</label>
                    <input type="text" name="WEBSITE_NAME" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['WEBSITE_NAME'];?>
" placeholder="Website Name" />
                </div>
                <div class="form-group">
                    <label>网站关键词</label>
                <input type="text" name="WEBSITE_KEYWORDS" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['WEBSITE_KEYWORDS'];?>
" placeholder="Website Keywords" />
                </div>
                <input type="submit" class="btn btn-primary" value="　提交　" />
                <input id="btnClear" type="reset" class="btn btn-default" value="　重置　" />

            </div>
        </div>
    </div>

    <!-- 验证码设置  -->
    <div class="panel panel-default hidden">
        <div class="panel-heading">验证码设置</div>
        <div class="panel-body">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>验证码字体大小</label>
                    <input type="text" name="VERIFY_FONTSIZE" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['VERIFY_FONTSIZE'];?>
" placeholder="25" />
                </div>
                <div class="form-group">
                    <label>验证码位数</label>
                    <input type="text" name="VERIFY_LENGHT" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['VERIFY_LENGHT'];?>
" placeholder="4" />
                </div>

                <div class="form-group">
                    <label>是否开启</label>
                    <div class="checkbox">
                        <label class="checkbox-inline">
                        	<?php if ($_smarty_tpl->tpl_vars['setting']->value['VERIFY_USENOISE'] == 'true') {?>
                            <input type="checkbox" name="VERIFY_USENOISE" value="true" checked /> 验证码杂点
                        	<?php } else { ?>
                        	<input type="checkbox" name="VERIFY_USENOISE" value="true" /> 验证码杂点
                        	<?php }?>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox-inline">
                        <?php if ($_smarty_tpl->tpl_vars['setting']->value['VERIFY_USECURVE'] == 'true') {?>
                            <input type="checkbox" name="VERIFY_USECURVE" value="true" checked /> 混淆曲线
                        <?php } else { ?>
                        	<input type="checkbox" name="VERIFY_USECURVE" value="true" /> 混淆曲线
                    	<?php }?>
                        </label>
                    </div>                    
                </div>                
                <input type="submit" class="btn btn-primary" value="　提交　" />
                <input id="btnClear" type="reset" class="btn btn-default" value="　重置　" />                
            </div>
        </div>        
    </div>

    <!-- 上传文件设置  -->
    <div class="panel panel-default hidden">
        <div class="panel-heading">文件设置</div>
        <div class="panel-body">
            
            <div class="col-lg-6">

                <label>附件上传大小</label>
                <div class="input-group">
                    <input type="text" name="UPLOAD_MAXSIZE" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['UPLOAD_MAXSIZE'];?>
" placeholder="6"  aria-describedby="basic-addon2" />
                      <span class="input-group-addon" id="basic-addon2">M单位</span>
                </div>
                <div class="form-group">
                    <label>附件上传类型</label>
                    <input type="text" name="UPLOAD_EXTS" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['UPLOAD_EXTS'];?>
" placeholder="jpg|gif|png" />
                </div>
                <div class="form-group">
                    <label>附件上传目录</label>
                    <input type="text" name="UPLOAD_SAVEPATH" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['UPLOAD_SAVEPATH'];?>
" placeholder="./Public/Uploads/"  />
                </div>

                <div class="form-group">
                    <label>缩略图尺寸</label>
                    <input type="text" name="IMAGE_THUMB_SIZE" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['setting']->value['IMAGE_THUMB_SIZE'];?>
" placeholder="600*400"  />
                </div>

                <input type="submit" class="btn btn-primary" value="　提交　" />
                <input id="btnClear" type="reset" class="btn btn-default" value="　重置　" />
            </div>
        </div>        
    </div>
</div>

</form>
</div>
</div>
<!-- 版权开始处 -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function (){
    $(".nav.nav-tabs li").click(function(){
        var index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        // alert(index);
        $(".panel.panel-default").eq(index).show().removeClass('hidden').siblings().hide();
    })    

});


<?php echo '</script'; ?>
>
</div>
<?php }
}
