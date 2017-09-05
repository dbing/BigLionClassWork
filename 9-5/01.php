<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */ 
class Mysql{

	   private function __construct()
    {
        //占位
    }
    public static function mys()
    {
    	 static $info;
    	 if(empty($info))
    	 {
    	 	$info = new self;
    	 }
    	 return $info;
    }
    private function __clone()
    {
      //防止复制克隆
    }
}
  //私有的构造方法
  //公开的静态方法
  //一个类只允许一个对象存在
  //第一次时判断是否静态属性是否有值 否：设静态属性 有：使用静态属性返回;
  $are1 = mysql::mys();
  $are2 = mysql::mys();
  $are3 = mysql::mys();
  // $are4  = clone($are3);
  // var_dump($are4);
  echo $are1 === $are2? 'ok' : "no";
  echo "<br>";
  echo $are2 === $are3? 'ok' : "no";
 ?>