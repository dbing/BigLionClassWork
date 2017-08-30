<!-- 张志国 -->
<?php
class Man{

	public $name='小黄';

}
$xh=new Man;
$dog = $xh;

 $dog->name='小黑';
echo $dog->name;

$pig=$dog;
$pig->name='小白';
echo $pig->name;


echo '<hr>';

$num = '哈哈哈哈';
$abc =& $num;
$abc = 'braem';
var_dump($num);
var_dump($abc);
?>