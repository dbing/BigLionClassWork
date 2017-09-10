<?php 
 /*
 * Created by 
 * User : Zhao Yu
 */ 
  include("Shop.php");
  include("Mysql.class.php");
  include("smarty/Smarty.class.php");
  $mysql = new Mysql;
  $smarty = new Smarty;
  $smarty ->template_dir = "theme";//模板目录
  $smarty ->caching = true;//开启缓存
  $smarty ->cache_lifetime = 5;//时间
  //没有缓存查询数据库 
  if(!$smarty->isCached("show.html"))
  {
    $data = $mysql->select("test");
    $smarty->assign("data",$data);
  }
  $smarty->display("show.html");

 ?>