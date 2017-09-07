<?php 


	function aa($un)
	{
		@include($un.'.class.php');
	}
	function bb($un)
	{
		include('app/'.$un.'.class.php');
	}
	spl_autoload_register('aa');
	spl_autoload_register('bb');
    $a =  new a;
    $b  =   new b;
    var_dump($a->un);die;
 ?>