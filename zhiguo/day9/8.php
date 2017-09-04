<!-- 张志国 -->
<?php

require 'MySql.class.php';

$db=Mysql::getInstance();

$db1=Mysql::getInstance();
if($db===$db1){
	echo 'yes';
}else{
	echo 'no';
}
