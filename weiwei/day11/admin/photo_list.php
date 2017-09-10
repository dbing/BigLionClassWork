<?php

require 'init.php';

$photos = $db->select('photo');

// 赋值
$smarty->assign('photos',$photos);
$smarty->display('photo_list.html');