<?php
/**
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/8/30
 * Time: 22:26
 */

class Upload
{
    private $error;

    public function upload($file)
    {
        //获取文件信息
        $name = $file['img']['name'];
        $tmp = $file['img']['tmp_name'];
        $error = $file['img']['error'];

        if($error == 0)
        {
            $file = 'imgs/'.$name;
            $move = move_uploaded_file($tmp,$file);
            if($move)
            {
                return $file;
            }
            else
            {
                $this->error = '文件移动失败';
                return false;
            }
        }
    }

    //错误消息
    public function getError()
    {
        return $this->error();
    }
}