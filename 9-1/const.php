<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
  class Consts{

      public function add()
      {
      	echo __CLASS__;//类名
      	ECHO "<br>";
      	echo __FUNCTION__;//方法名
      	ECHO "<br>";
      	echo __FILE__;//文件位置
      	ECHO "<br>";
      	ECHO __LINE__;//行数
      	ECHO "<br>";
      	ECHO __DIR__;//问价目录
      	ECHO "<br>";
      	echo basename(__FILE__);//文件名
      	ECHO "<br>";
      	echo dirname(__DIR__);//返回路径中的目录
      }
      public function method()
      {
      	echo __METHOD__;//返回类的名字跟方法名
      }

  }
 $info = new Consts;
 echo $info->add();
 ECHO "<BR>";
 ECHO $info->method();die;
 ?>