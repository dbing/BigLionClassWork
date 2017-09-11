<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-11 0011
 * Time: 18:40
 */
function success($msg,$url,$time=1)
{
    echo $msg;
    header('refresh:'.$time.';url='.$url);
    exit;
}

function error($msg,$url,$time=1)
{
    echo $msg;
    header('refresh:'.$time.';url='.$url);
    exit;
}
