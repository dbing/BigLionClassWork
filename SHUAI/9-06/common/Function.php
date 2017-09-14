<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $公共的函数
 * Date: 2017/9/9
 * Time: 10:55
 */
//自定义消息提示
function success($msg,$url,$time=3)
{
    echo $msg;
    header('refresh:'.$time.';url='.$url);
    exit;
}
function error($msg,$url,$time=3)
{
    echo $msg;
    header('refresh:'.$time.';url='.$url);
    exit;
}

/**
 * 检测是否登录
 */
function checkLoginEd()
{
    if (!isset($_COOKIE['isLoginEd']))
    {
        error('请先登录','login.php');
    }
}

/**
 * 获取ip
 */
function getIp()
{
    return getenv('REMOTE_ADDR');
}
function p($param)
{
    if(is_array($param))
    {
//        echo '<pre>';
        print_r($param);
        exit('<hr>');
    }else
    {
        var_dump($param);
        exit('<hr>');
    }
}
?>