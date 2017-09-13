<?php
/**
 * @author 张涛 2017/09/12
 * @param  后台主页
 */

require 'init.php';
checkLogin(); //检测是否登录

$action = isset($_GET['action']) ? $_GET['action'] : 'default';

if($action == 'default')
{
	$smarty->display('config.html');	
}
elseif($action == 'update')
{
	$config = '<?php' ."\n return ".var_export($_POST, true). ';';
	$res = file_put_contents(ROOT_PATH .'/config/setting.php', $config);
	if($res)
	{
		success('更新配置成功', 'config.php');
	}
	else
	{
		error('更新配置失败', 'config.php');
	}
}
