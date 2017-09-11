<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $自动加载leiku
 * Date: 2017/9/9
 * Time: 14:38
 */
class Loader
{
   static public function autoload($className)
    {


        if (strpos($className,'Model') !== false)
        {
            $file = ROOT_PATH .'/model/'.$className.'.class.php';
            if (file_exists($file))
            {
                require_once $file;
            }
        }
        else if (strpos($className,'Smarty') !== false){
            $file = ROOT_PATH .'/libs/smarty/'.$className.'.class.php';
            if (file_exists($file))
            {
                require_once $file;
            }
        }else
        {
            $file = ROOT_PATH .'/libs/'.$className.'.class.php';

            if (file_exists($file))
            {

                require_once $file;
            }
        }
    }
}
?>