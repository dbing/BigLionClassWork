<?php 

	include("init.php");
	$are = $db->select("picture","limit 0,5");
	$smarty->assign("are",$are);
	$smarty->display("./tpl/photo_list.html");
 ?>