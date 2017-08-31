<?php
/*
 * 多态
 * */
class sta
{
    public function work(){
        echo "集体类中实行";
    }

}
class dev extends sta{
    public function work(){
        echo "denglu";
    }
}

class tea extends sta {
    public function work(){
        echo 'teacher';
    }
}

class cook extends sta{
    public function work(){
        echo "work";
    }
}

function echowork($obj){
    if($obj instanceof sta){
        $obj->work();
    }
}
//echowork(new dev);
//echowork(new tea);
//echowork(new cook);