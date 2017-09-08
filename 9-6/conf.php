<?php 
/*
 * Created by 
 * User : Zhao Yu
 */
  include("smarty/Smarty.class.php");
  $info = new Smarty;
  $info ->template_dir= "theme";//模板目录
  $data  =array("1"=>"一","2"=>"二");
  $name = isset($_GET['name']) ? $_GET['name'] :'yes';
  $info->assign("data",$data);
  $info->assign("if","1");
  $info->assign("name",$name);
  $info->display("conf.html");
 ?>