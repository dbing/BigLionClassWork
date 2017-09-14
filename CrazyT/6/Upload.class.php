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
    private $size = 10; // M
    private $type = array('image/gif','image/jpeg');
    private $rootPath = 'imgs';
    private $fileInfo = array();

    /**
     * 多文件上传
     */
    public function uploadAll()
    {
        if(isset($_FILES) && is_array($_FILES))
        {
            if(count($_FILES)>0)
            {
                $result = array();
                foreach ($_FILES as $key => $value)
                {
                    $result[$key] = $this->uploadOne($value);
                }
            }
            return $result;
        }
        $this->error = '未检测到多张图片';
        return false;
    }

    /**
     * 单文件上传
     */
    public function uploadOne($file)
    {
        if(!isset($file))
        {
            $this->error = '没有文件上传';
            return false;
        }
        $this->fileInfo = $file;
        //大小检测
        if(!$this->getSize())
        {
            return false;
        }

        //类型检测
        if(!$this->getType())
        {
            return false;

        }

        if($this->fileInfo['error'] == 0)
        {
            $fileName = $this->createFileName();
            //创建目录
            if(!$path = $this->createPath())
            {
                return false;
            }
            $filePath = $path.'/'.$fileName;
            $move = move_uploaded_file($this->fileInfo['tmp_name'],$filePath);
            if($move)
            {
                return $filePath;
            }
            else
            {
                $this->error = '文件移动失败';
                return false;
            }
        }
        else
        {
            switch ($this->fileInfo['error']) {
                case '1':
                    $this->error = '文件大小超过服务器限制';
                    break;
                case '2':
                    $this->error = '文件大小超过表单中的限制';
                    break;

                default:
                    # code...
                    break;
            }
            return false;
        }
    }

    private function createPath()
    {
        $path = $this->rootPath.'/'.date('Y').'/'.date('m').'/'.date('d');
        if(!file_exists($path))
        {
            if(!mkdir($path,0777,true))
            {
                $this->error = "目录创建失败";
                return false;
            }
        }
        return $path;
    }

    private function createFileName()
    {
        $ex = substr($this->fileInfo['name'],strpos($this->fileInfo['name'],'.'));
        return time().rand(10000,9999).$ex;
    }
    //文件大小
    private function getSize()
    {
        if($this->fileInfo['size'] > $this->size*1024*1024)
        {
            $this->error = '文件超过1M';
            return false;
        }
        return true;
    }

    //文件类型
    private function getType()
    {
        if(!in_array($this->fileInfo['type'],$this->type))
        {
            $this->error = '文件类型不合法';
            return false;
        }
        return true;
    }

    //错误消息
    public function getError()
    {
        return $this->error;
    }
}