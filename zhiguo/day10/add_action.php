<!-- 张志国 -->
<?php

require 'MySql.class.php';

$data = $_POST;

$db = new MySql;

$result = $db->add('a',$data);

if($result > 0)
{
 
    echo "<script> alert('注册成功');location.href='list.php'</script>";
}
else
{
    die('注册失败');
}
