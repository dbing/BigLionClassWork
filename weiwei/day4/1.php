<?php

class Rich{

 public $name="耿经纬";
 public $sex="男";
 protected $car="XXXX";//受保护的
 private $mony="100000000";//私有的

    public function getCar(){
        return $this->car;
    }
    public function test(){
        echo 'TEST';
    }
    public function __construct(){
    	echo 'Rich';
    }


}



class chinaRich extends Rich
{
    public function __construct(){
       
        parent::__construct();
        echo 'ChinaRich';
    }
}
$cr = new ChinaRich;
echo $cr->getCar();
?>