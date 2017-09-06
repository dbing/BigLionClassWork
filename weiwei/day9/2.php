<?php 
require '3.php';
require '4.php';
\Home\test();
\Admin\test();
echo '<hr>';
echo \Home\md5(123);
echo '<hr>';
echo \md5(123);
echo '<hr>';
function test(){
	echo __FILE__;
}
test();
?>
