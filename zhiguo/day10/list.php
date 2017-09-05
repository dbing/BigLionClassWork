<!-- 张志国 -->
<?php



require 'MySql.class.php';
require 'smarty/Smarty.class.php';

$smarty = new Smarty;
$db = new MySql;
$smarty->caching = true;
$smarty->template_dir = 'tpl';

// 先判断缓存是否存在
if(!$smarty->isCached('admin_list.html'))
{
   
    $data = $db->select('a');

    // 赋值
    $smarty->assign('data',$data);
}

// 渲染模板
$smarty->display('admin_list.html');