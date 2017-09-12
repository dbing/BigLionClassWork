<!-- 张志国 -->
<?php


class Factory
{
    
    static function getMySql()
    {
        return MySql::getInstance();
    }

    static function getSmarty()
    {
        $smarty = new Smarty;
        $smarty->template_dir = ROOT_PATH .'/admin/tpl';
        $smarty->compile_dir = ROOT_PATH .'/runtime/admin/compile';
        $smarty->cache_dir = ROOT_PATH .'/runtime/admin/cache';
        return $smarty;
    }
}