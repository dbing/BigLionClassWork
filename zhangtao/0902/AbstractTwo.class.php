<?php
header("content-type:text/html;charset=utf-8");
/**
 * @author 张涛 2017/09/02
 * @param  对象接口
 * @return NULL
 */

abstract class AbstractTwo 
{
	abstract private head(); //头部
	abstract private body(); //身体
	abstract private leg();  //支柱(腿)
	abstract private footer(); //头部
}

