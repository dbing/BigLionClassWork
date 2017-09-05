<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 * 单列模式调用类
 */ 
  
   include("Shop.php");
   include("Mysql.class.php");
   $are1 = Mysql::one_Line();
   $are2 = Mysql::one_Line();
   echo $are1 === $are2? 'ok' : "no";


 ?>