<?php
defined('BIGLION') or die('Access denied :(');
/**
 * @author 张涛 2017/09/10
 * @param  自动加载类
 */
class Autoload
{
	static public function autoloads($className)
	{
		//加载模型层
		if(strpos($className, 'Model') !== false)
		{
			$file = ROOT_PATH . '/model/' .$className. '.class.php';
			if(file_exists($file))
			{
				require_once($file);
			}
			
		}
		//加载模板引擎
		else if(strpos($className, 'Smarty') !== false)
		{
			$file = ROOT_PATH . '/libs/smarty/' .$className. '.class.php';
			if(file_exists($file))
			{
				require_once($file);
			}
			
		}
		//加载第三方类库
		else
		{
			$file = ROOT_PATH . '/libs/' .$className. '.class.php';
			if(file_exists($file))
			{
				require_once($file);
			}
		}

	}
}