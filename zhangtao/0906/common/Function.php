<?php
/**
 * @author 张涛 2017/09/08
 * @param  公共函数库
 */

/**
 * 分类等级处理
 */
function getCatChildLevel($data)
{
	$arr = [];
	foreach ($data as $key => $val) {
		if($val['parent_id'] == 0)
		{
			$arr[] = $val; //获取到的是顶级分类
		}
	}
	//为顶级分类找孩子
	foreach ($arr as $key => $val) {
		foreach ($data as $k => $v) {
			if($v['parent_id'] == $val['cat_id'])
			{
				$arr[$key]['child'][] = $v;
			}
		}
	}
	return $arr;
}

/**
 * 获取客户端IP
 */
function getClientIp()
{
	return getenv('REMOTE_ADDR');
}

//定义消息提示成功
function success($msg, $url, $time = 2)
{
	echo $msg;
	header('refresh:'.$time.';url='.$url);
	exit();
}

//定义消息提示失败
function error($msg, $url = '', $time = 2)
{
	echo $msg;
	header('refresh:'.$time.';url='.$url);
	exit();
}

// 检测用户是否登录
function checkLogin()
{
	if(!isset($_COOKIE['adminInfo']))
	{
		error('请先登录', 'login.php');
	}
}

//打印函数
function p($data)
{
	if(is_array($data))
	{
		echo '<pre>';
		print_r($data);
		exit('<hr>');
	}
	else
	{
		var_dump($data);
		exit('<hr>');
	}
}