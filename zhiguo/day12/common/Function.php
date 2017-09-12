<!-- 张志国 -->
<?php


function success($msg,$url,$time=3)
{
    echo '<h1><font color="#006400">'.$msg.'</font></h1>';
    header('refresh:'.$time.';url='.$url);
    exit;
}


function error($msg,$url,$time=3)
{
    echo '<h1><font color="#8b0000">'.$msg.'</font></h1>';
    header('refresh:'.$time.';url='.$url);
    exit;
}



function p($param)
{
    if(is_array($param))
    {
        echo '<pre>';
        print_r($param);
        exit('<hr>');
    }
    else
    {
        var_dump($param);
        exit('<hr>');
    }
}