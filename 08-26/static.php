<?php 
header("content-type:text/html;charset=utf-8"); 
class Info{

		 public static $user ="66663";
		 public $name ="888";
		 static public function man()
		 {
		 	echo "5555".self::$user;;
		 }
		 public function add()
		 {
		 	echo "2222";
		 }
}
    $are = new Info;
    //静态属性不可以被对象访问  $are->$user;
    echo  $are::$user;
    echo "<br>";
    //静态方法可以被对象访问
    echo $are->man();
    echo "<br>";
    //静态方法可以被类直接访问
    echo Info::man();
    //静态方式调用不是静态的方法会导致一个错误 
    //echo Info::add();
    //静态属性不能使用表达式
    //直接使用类名访问
    $info = "Info";
    echo $info::man();
    //echo $info::add();//导致一个错误 


 ?>