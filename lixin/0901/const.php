<?php 
  class Consts{

      public function add()
      {
      	echo __CLASS__;//类名
      	echo "<br>";
      	echo __FUNCTION__;//方法名
      	echo "<br>";
      	echo __FILE__;//文件位置
      	echo "<br>";
      	echo __LINE__;//行数
      	echo "<br>";
      	echo __DIR__;//问价目录
      	echo "<br>";
      	echo basename(__FILE__);//文件名
      	echo "<br>";
      	echo dirname(__DIR__);//返回路径中的目录
      }
      public function method()
      {
      	echo __METHOD__;//返回类的名字跟方法名
      }

  }
 $info = new Consts;
 echo $info->add();
 echo "<br>";
 echo $info->method();die;
 ?>