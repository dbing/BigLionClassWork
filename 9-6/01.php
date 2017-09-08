<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
$title  = "888233";
$name  = "我问问";
include("smarty/Smarty.class.php");
$info = new Smarty;
$info ->template_dir= "theme";//模板目录
$info ->compile_dir ="return";//编译目录
$info ->caching = true;//开启缓存
$info ->cache_lifetime = 30;//时间
if(!$info->isCached("02.html"))
{
	echo "6555";
	$title  = "6666333";
	$name  = "888888";
	$info ->assign("title",$title);
    $info ->assign("name",$name);
}
//赋值
$info ->assign("title",$title);
$info ->assign("name",$name);
//视图
$info ->display("02.html");

 ?>