<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Ps: 添加赋值视图查询分类 
 */ 
include("init.php");
$data = $db->select("cat");
$smarty->assign("data",$data);
$smarty->display("./tpl/photo_add.html");
 ?>