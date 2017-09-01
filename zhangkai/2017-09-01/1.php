<?php
/*
 * 魔术方法
 * */
class man
{
    public $name = 'xxx1';
    protected $car = 'xxx2';
    private $money = 'xxx3';

    public function __clone()
    {
        echo "ke long";
    }

    public function __get($argument)
    {
        echo '访问'.$argument;
        return $this->$argument;
    }

    public function __set($name, $value)
    {
       var_dump($name);
       var_dump($value);
       $this->$name = $value;
    }

    public function __isset($name)
    {
        var_dump($name);
    }

    public function __unset($name)
    {
       var_dump('running Unset()'.$name);
    }

    public function __call($key, $value)
    {
        var_dump($key);
        var_dump($value);
    }

    public function __callStatic($name,$value){
        echo "Calling statics method '$name'"
            .implode(',',$value)."\n";
    }

    private function getdemo()
    {
        echo 'getdemo';
    }
}
    $m = new man;

//$m->getdemo();
//unset($m->money);
//man::getCar(1,'xxx','yyy');

//    $m ->car = 'jjdjksaljdk;
    
   
//    $m2 = clone $m;

//    if($m === $m2)
//    {
//        echo "=";
//    }
//    else
//    {
//        echo "!=";
//    }