<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Ps: 工厂模式
 */  
   
     class Pattern
     {	 
     	 //数据库
     	 static function getMysql()
     	 {
     	 	return  $db = Mysql::back();
     	 }
     	 //smarty
     	 static function smarty($url)
     	 {
 	 	    $smarty = new Smarty;
			$smarty ->template_dir= $url."/admin/tpl";//模板目录
			return $smarty;
     	 }
     	 static function fileImgs()
     	 {
			return  $img = new File;
     	 }
     }


 ?>