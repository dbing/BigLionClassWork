<?php
defined('BIGLION') or die('Access denied :)_(:');
/**
 * @author 张涛 2017/09/07
 * @param  工厂方法
 */

class Factory
{
	/**
	 * 获取mysql对象
	 * @return Object
	 */
	static function getMysql()
	{
		return Mysql::getInstance();
	}
	/**
	 * 初始化模板引擎
	 * @return smarty  Object
	 */
	static function getSmarty($module = 'admin')
	{
		$smarty = new Smarty;
		if($module == 'admin')
		{
			$smarty->template_dir = ROOT_PATH . '/admin/tpl'; 			  //模板文件
			$smarty->compile_dir  = ROOT_PATH . '/runtime/admin/compile'; //编译缓存
			$smarty->cache_dir    = ROOT_PATH . '/runtime/admin/cache';   //缓存目录
		}
		else
		{
			$smarty->template_dir = ROOT_PATH . '/themes/default'; 			  //模板文件
			$smarty->compile_dir  = ROOT_PATH . '/runtime/home/compile'; //编译缓存
			$smarty->cache_dir    = ROOT_PATH . '/runtime/home/cache';   //缓存目录
		}
		return $smarty;
	}

	/**
	 * 读取配置项
	 */
	static function getSetting()
	{
		return require ROOT_PATH .'/config/setting.php';

	}
	
}