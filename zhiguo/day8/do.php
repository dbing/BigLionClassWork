<!-- 张志国 -->
<?php 
class Man
{
	public $name = 'han人';
}


$objStr = file_get_contents('obj');



$obj = unserialize($objStr);


echo $obj->name;


?>