<?php
/**
 * Created by PhpStorm.
 * User: lucy
 * Date: 2017/8/30
 * Time: 22:22
 */

class Up
{
/**["name"]=>
string(17) "578eeb5b7577f.jpg"
["type"]=>
string(10) "image/jpeg"
["tmp_name"]=>
string(43) "C:\Users\mac\AppData\Local\Temp\phpA1C3.tmp"
["error"]=>
int(0)
["size"]=>
int(378130)
* 打印$file
 */
    private $type = array('image/jpeg','image/gif'); //设置文件类型
    private $size =1;             //设置文件大小最大为1M
    private $error;               //存储错误信息
    private $fileInfo = array();  //存储上传文件信息
    public function uploadOne($file)
    {
        //判断文件是否上传
        if(!empty($file))
        {
            $this->error = '没文件被上传';
            return false;
        }

        //上传放入$fileInfo中
        $this->fileInfo=$file;

        //判断文件大小
        if(!$this->checkSize())
        {
            return false;
        }

        //文件类型
        if (!$this->checkType())
        {
            return false;
        }
//        var_dump( $this->fileInfo);

//        if ($this->fileInfo[]>)

        //判断文件上传错误信息
        if($this->fileInfo['error'] == 0)
        {
            $fileName = $this->createFileName();

            // 创建目录
            if(!$filePath = $this->createPath())
            {
                return false;
            }

            $destFile = $filePath.'/'.$fileName;

            $bool = move_uploaded_file($this->fileInfo['tmp_name'], $destFile);
            if($bool)
            {
                return $destFile;
            }
            else
            {
                $this->error = '移动错误';
                return false;
            }
        }
        else
        {
            switch ($this->fileInfo['error']) {
                case '1':
                    $this->error = '上传的文件超过了服务器限制';
                    break;
                case '2':
                    $this->error = '上传的文件超过了表单中限制';
                    break;
                case '3':
                    $this->error = '文件只有部分被上传';
                    break;
                default:
                   $this->error = 'are u kidding me ?';
                    break;
            }
            return false;
        }

    }

    public function getError()
    {
        return $this->error;
    }
    //检测文件大小
    public function checkSize()
    {
        if ($this->fileInfo['size'] > $this->size * 1024 * 1024)
        {
            $this->error = '文件超过1M';
            return false;
        }
        return true;
    }
    //检测文件类型
    public function checkType()
    {
        if (in_array($this->fileInfo['type'],$this->type))
        {
            return true;
        }
        $this->error = '文件类型不符';
        return false;
    }

    //文件重命名
    public function createFileName()
    {
        //获取文件扩展名：.jpg
        //strrpos 计算指定字符串在目标字符串中最后一次出现的位置，包括'.'
        $extension = substr($this->fileInfo['name'], strrpos($this->fileInfo['name'], '.'));
        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //随机打乱一个字符串,取后五位
        $randLetter = substr(str_shuffle($str), -5);
        //拼接现在的时间戳，和5位随机数,5位随机字母加上扩展名
        return time().rand(10000,99999).$randLetter.$extension;
    }

    //创建上传目录
    public function createPath()
    {
       // /年/月/日/
         $path = $this->rootPath.'/'.date('Y').'/'.date('m').'/'.date('d');
         if(!file_exists($path))
         {
             //默认的 mode 是 0777，意味着最大可能的访问权
             if(!mkdir($path,0777,true))
             {
                 $this->error = '创建目录失败';
                 return false;
             }
         }
         return $path;
    }



}