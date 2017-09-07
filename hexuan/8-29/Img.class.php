<?php 

   class p{

   	     public function __construct()
   	     {
   	     	 mysql_connect("127.0.0.1","root","");
   	     	 mysql_select_db("img");
   	     	 mysql_trry("set names utf8");
   	     }


           public function ins($a)
           {
              foreach ($a as $key => $value) {
               $tr = mysql_query($value);
              }
                return $tr;
           }
   }

 ?>