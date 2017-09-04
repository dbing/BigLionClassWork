<!-- 张志国 -->
<?php

require '3.php';
//require '4.php';

\Home\text('obj');
echo '<br>';
echo \Home\md5('123');

function text($str){
return $str;
}
echo '<br>';
echo text('5555');