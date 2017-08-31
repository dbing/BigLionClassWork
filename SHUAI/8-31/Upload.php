<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $多文件
 * Date    : 2017/8/30 0030
 * Time    : 19:40
 */
require "MySql.class.php";
require "Upload.class.php";
$db = new MySql();
$up = new Upload();
$img = array();
//多文件循环
foreach ($_FILES['img'] as $key => $val)
{
  foreach ($val as $k=>$v){
      $img[$k][$key] = $v;
  }
}


$result = $up->uploadAll($img);
if($result)
{
    foreach ($result as $key => $val)
    {
        //入库
        $sql = "INSERT INTO cai (img) VALUES('$val')";
        $res = $db->insert($sql);
    }
}else
{
    echo $up->error;
}

?>