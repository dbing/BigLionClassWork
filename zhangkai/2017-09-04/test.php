<?php
require "3.php";

require "4.php";

\Home\test();

\Admin\test();


echo "<br>";

echo \md5(123);
echo "<br>";
echo \Home\md5(123);

echo "<hr>";
function test()
{
    echo __FILE__;
}
test();
?>