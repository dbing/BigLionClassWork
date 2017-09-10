<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $content
 * Date: 2017/9/7
 * Time: 22:58
 */
class Factory
{
    /**
     * 获取 mysql对象
     * @return MySql
     */
    static function getMySql()
    {
       return MySql::gteA();
    }

    /**
     * //初始化模板引擎
     * @return $smarty
     */
    static function getSmarty()
    {

        $smarty = new Smarty;
        $smarty->template_dir = ROOT_PATH .'/admin/tpl';
        $smarty->compile_dir = ROOT_PATH .'/runtime/admin/compile';
        $smarty->cache_dir = ROOT_PATH .'/runtime/admin/cache';
      return $smarty;
    }
    static function getDemo()
    {
        echo 'OK';
    }
}
?>