<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-07 0007
 * Time: 21:35
 */

//获取mysql对象
class factory
{
    static function getMySql()
    {
        return MySql::getInstance();
    }

    static function getSmarty()
    {
        $smarty = new Smarty;
        $smarty->template_dir = ROOT_PATH.'/admin/tpl';
        $smarty->compile_dir = ROOT_PATH.'/runtime/admin/compile';
        $smarty->cache_dir = ROOT_PATH.'/runtime/admin/cache';
        return $smarty;
    }
}