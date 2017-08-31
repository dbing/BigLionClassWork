<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : 上传多文件
 * content : 上传文件大小限制
 * content :  类型
 * content :  名称重复
 * content :   文件的归档
 * Date    : 2017/8/30 0030
 * Time    : 20:12
 */
class Upload
{
    private $error;
    private $size = 6; //文件大小 M
    private $fileInfo = array();
    private $type = array('image/gif','image/jpeg','image/ipg');
    private $rootPath = 'images/';
    //多文件上传
    public function uploadAll($img)
    {
        if(isset($img) && is_array($img) ){
            if(count($img) >=0){
                $resut = array();
                foreach ($img as $key=>$val){
                    $resut[$key] = $this->uploadOne($val);
                }
            }
        }
        $this->error = '多文件失败';
        return false;
    }
    public function uploadOne($fil)
    {
        //先判断文件
        if(!isset($fil))
        {
            $this->error = '没有文件上传';
            return false;
        }
        //获取文件
        $this->fileInfo = $fil;
//        $img = $fil['img']['name'];
//        $tmp = $fil['img']['tmp_name'];
//        $error = $fil['img']['error'];
//        $size = $fil['img']['size'];
        //文件大小
        if(!$this->checkSize())
        {
            return false;
        }
        //类型
        if(!$this->checkType())
        {
                return false;
        }


        if($this->fileInfo['error'] == 0)
        {
            //文件名字重写
            $fileName = $this->checkFileName();
            //创建目录
            $filePath  = $this->createPath();
            if(!$filePath)
            {
                return false;
            }

            $destFile = $filePath.'/'.$fileName;
//            $file = 'images/'.$this->fileInfo['name'];
            $bool = move_uploaded_file($this->fileInfo['tmp_name'], $destFile);
            if($bool)
            {
                return $destFile;
            }else{
                $this->error = '错误';
                return false;
            }
        }else{
            switch ($this->fileInfo['error']){
                case '1':
                    $this->error = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                    break;
                case '2':
                    $this->error = '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                    break;
                case '3':
                    $this->error = '文件只有部分被上传';
                    break;
                case '4':
                    $this->error = '没有文件被上传';
                    break;
                case '6':
                    $this->error = '找不到临时文件夹';
                    break;
                default:
                    break;
            }
            return false;
        }
    }
    //文件大小
    private function checkSize()
    {
        //判断上传文件大小
        if($this->fileInfo['size'] >$this->size*1024*1024){
           $this->error = '文件上传大小不能2M';
           return false;
        }else{
            return true;
        }
    }
    //判断类型
    private function checkType()
    {
        if(!in_array($this->fileInfo['type'],$this->type))
        {
            $this->error = '类型不合法';
            return false;
        }else{
            return true;
        }
    }
    //文件名重写
    private function checkFileName()
    {
        $nameSize  = substr($this->fileInfo['name'],strrpos($this->fileInfo['name'],'.'));
        return time().rand(20,999999).$nameSize;

    }
    //创建目录
    private function createPath()
    {
        $path = $this->rootPath.date('Y').'/'.date('m').'/'.date('d');
        if(!file_exists($path)){
           if(!mkdir($path,0777,true)){
               $this->error = '创建目录失败';
               return false;
           }
        }
        return $path;
    }
    //错误消息
    public function getError()
    {
        return $this->error;
    }
}
?>