<?php
/**
 * 多态
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/9/7
 * Time: 22:54
 */


class Staff
{
    public function work()
    {
        echo '在子类中实现';
    }
}

class aa extends Staff
{
    public function work()
    {
        echo 'aa';
    }
}

class bb extends Staff
{
    public function work()
    {
        echo 'bb';
    }
}

function echoWork($obj)
{
    if($obj instanceof Staff)
    {
        $obj->work();
    }
}

 echoWork(new aa);
 echoWork(new bb);

?>