<?php
/**
 * @author 张涛 2017/09/07
 * @param  后台主页
 */

require 'init.php';
$admin = new Upload;
p($admin);
$smarty->display('index.html');  //后台主页