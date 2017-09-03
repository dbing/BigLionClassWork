<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/02
 * @param  对象接口  
 *         1.关键词 interface
 *         2.接口中的方法，要公开
 *         3.支持多继承
 * @return NULL
 */
//头部
interface InterfaceHeader
{
	public function eye();  //眼睛
	public function nose(); //鼻子
}

//身体
interface InterfaceBody
{
	public function arm();  //手臂
}

//脚部
interface InterfaceFooter
{
	public function footer();  //脚部
}

class Man implements InterfaceHeader, InterfaceBody, InterfaceFooter
{
	//眼睛
	public function eye()
	{
		echo '眼睛';
	}  
	//鼻子
	public function nose()
	{
		echo '鼻子';
	} 
	//手臂
	public function arm()
	{
		echo '手臂';
	} 
	//脚部
	public function footer()
	{
		echo '脚部';
	} 
}

$m = new Man;
var_dump($m);