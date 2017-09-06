<?php
	class people
	{

		 public $sex ='公的';
		 public $uname;

		 public function __construct($uname)
		 {
		 	$this->uname = $uname;
		 }

	}

	$s = new people("小花");
	$name = $s;
	$name->sex =  '母';
	$sex = $name;
	echo $s->sex;
	echo "<br>";
	$app = clone $s;
 	$app->uname = '小白';
 	echo $s ->uname;

 ?>