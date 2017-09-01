<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/01
 * @param  魔术常量
 *         php 向它运行的任何脚本提供了大量的预定义常量。
 *         不过很多常量都是有不同的扩展库定义的，只有在
 *         加载了这些扩展库时才会出现，或者动态加载后，
 *         或者在编译时已经包括进去了。
 * @return NULL
 */

class Consts
{
	//魔术常量
	public function one()
	{
		echo '类名称：' .__CLASS__. "<br>";
		echo '方法名称：' .__FUNCTION__. "<br>";
		echo '当前行号：' .__LINE__. "<br>";
		echo '文件完整路径和文件名：' .__FILE__. "<br>";
		echo '所在目录：' .__DIR__. "<br>";
		echo '类方法名：' .__METHOD__. "<br>";
		echo '当前命名空间名称：' .__NAMESPACE__. "<br>";
	}
}

$c = new Consts;
echo $c->one();