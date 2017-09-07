<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-06 0006
 * Time: 18:52
 */


require 'init.php';

$photos = $db->select('photo');

// 赋值
$smarty->assign('photos',$photos);
$smarty->display('photo_list.html');