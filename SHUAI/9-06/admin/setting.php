<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/13
 * Time: 19:53
 */
require 'init.php';
$action = isset($_GET['action']) ? $_GET['action'] : 'default';
if ($action == 'default')
{
    $smarty->display('config.html');
}
else if($action == 'update')
{
    $config = var_export($_POST,true);
    $fullConfig = '<?php '."\n  return ".$config.';';
    $res = file_put_contents('config.php','/config/setconf.php'.$fullConfig);
    if ($res)
    {
        success('配置成功','setting.php');
    }else{
        error('更新配置失败','setting.php');
    }
}
$smarty->display('config.html')
?>