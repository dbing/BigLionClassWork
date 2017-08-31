<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $文件
 * Date    : 2017/8/30 0030
 * Time    : 11:40
 */
require "MySql.class.php";
require "Upload.class.php";
$db = new MySql();
$up = new Upload();
$result = $up->uploadOne($_FILES['img']);
if($result)
{
    //入库
    $sql = "INSERT INTO cai (img) VALUES('$result')";
    $res = $db->insert($sql);

}else
{
    echo $up->error;
}

?>