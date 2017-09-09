<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Ps: 引入类库
 */ 
  $url = str_replace("\\","/",dirname(__DIR__));
  include $url.("/library/Shop.php");
  include $url.("/library/Mysql.class.php");
  include $url.("/library/smarty/Smarty.class.php");
  include $url.("/library/Pattern.class.php");
  include $url.("/library/File.class.php");
  $db = Pattern::getMysql();
  $smarty = Pattern::smarty($url);
  $img = new File;

 ?>