<!-- 张志国 -->
<?php

class Loader
{
    static public function autoload($className)
    {
        // 加载Model
        if(strpos($className,'Model') !== false)
        {
            $file = ROOT_PATH .'/model/'.$className.'.class.php';
            if(file_exists($file))
            {
                require_once $file;
            }
        }
        // 加载Smarty引擎
        else if(strpos($className,'Smarty') !== false)
        {
            $file = ROOT_PATH .'/libs/smarty/'.$className.'.class.php';
            if(file_exists($file))
            {
                require_once $file;
            }
        }
        // 其他类库
        else
        {
            $file = ROOT_PATH .'/libs/'.$className.'.class.php';
            if(file_exists($file))
            {
                require_once $file;
            }
        }
//        var_dump($file);

    }
}