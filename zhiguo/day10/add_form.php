<!-- 张志国 -->
<?php

require 'smarty/Smarty.class.php';

$smarty = new Smarty;
$smarty->template_dir = 'tpl';
$smarty->display('admin_add.html');
