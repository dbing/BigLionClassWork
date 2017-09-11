<?php
/**
 * @author 张涛 2017/09/08
 * @param  公共函数库
 */

//定义消息提示成功
function success($msg, $url, $time = 2)
{
	echo $msg;
	header('refresh:'.$time.';url='.$url);
	exit();
}

//定义消息提示失败
function error($msg, $url, $time = 2)
{
	echo $msg;
	header('refresh:'.$time.';url='.$url);
	exit();
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