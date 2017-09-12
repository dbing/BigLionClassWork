<!-- 张志国 -->
<?php

require 'init.php';

$photo_list = $db->select('photos');

// 赋值
$smarty->assign('photo_list',$photo_list);
$smarty->display('photo_list.html');
