<?php
class upload
{
    public function uploadone($file)
    {
        $name = $file['img']['name'];
        $tmp_name = $file['img']['tmp_name'];
        $error = $file['img']['error'];
        if($error == 0){
            $files = 'image/'.$name;
            $bool = move_uploaded_file($tmp_name,$name);
            if($bool)
            {
                return $file;

            }
            else
            {
                $this->error('移动错误');
                return false;
            }
        }
    }

    public function geterror()
    {
        return $this->error;
    }
}

