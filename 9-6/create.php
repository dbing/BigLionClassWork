<?php 
/*
 * Created by 
 * User : Zhao Yu
 */
  header("content-type:text/html;charset=utf-8");
  include("smarty/Smarty.class.php");
  $smarty =  new Smarty; 
  $smarty ->template_dir = "theme";//模板目录
  $smarty ->display("add.html");

 ?>