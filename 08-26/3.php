<?php 

  class dome{

  		public static $doe=1;
  		public function __construct()
     {
  	     self::$doe += 3;
     }
  }
  		new dome;
  		echo dome::$doe;
 ?>