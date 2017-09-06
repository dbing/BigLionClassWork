<?php 

	function c($uname)
	{
		include($uname.'.class.php');
	}
	function d($uname)
	{
		include('app/'.$uname.'.class.php');
	}
	spl_autoload_register('c');
	spl_autoload_register('d');
    $b =  new b;
    $a  =   new a;
    print_r($a->uname);die;
 ?>