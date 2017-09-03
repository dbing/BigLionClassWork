<?php 

/*
@author XIAO

公开的，受保护的属性，方法不会被子类继承


 */


header("content-type:text/html;charset=utf-8;");
    class Rich{

		public $name="祁天笑";
	    public $sex = "男"; 
	    protected $car = "五菱牌";
		private $money = "1000000000"; 

        public function __construct(){
            echo "111";
        }

        public function test(){
            echo "333";
        }

    }

    // $a = new Rich;
    // echo $a->money;
    // echo $a->getcar();
    // echo $a->getmoney();
    // die;


    class China extends Rich{
        public function getcar(){
            return $this->car;
        }

        public function getmoney(){
            return $this->money;
        }

        public function __construct(){
            // parent::__construct();
            parent::test();
            echo "222";
        }
    }

    $a = new China;
    // var_dump($a);
    echo "<br />";
    // echo $a->name;
    echo "<br />";
    // echo $a->car;
    echo "<br />";
    // echo $a->money;
    // echo $a->getcar();
    // echo $a->getmoney();
    

 ?>