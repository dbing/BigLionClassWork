<?php
class reg{
    public $name;
    public $age;
    public $message;
    public function __construct($name,$age,$message)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this ->message = $message;
    }

    public function info()
    {
        echo "姓名：".$this->name;
        echo "<br>";
        echo "年龄：".$this->age;
        echo "<br>";
        echo "我要说：".$this->message;
        echo "<br>";
    }
}
    $res = new reg('小飞飞','24','美女约吗?');
    echo "<pre>";
    var_dump($res);
    echo "<br>";
    $res -> info();


    $data = new reg('改锥','24','家里还二十头老母猪');
    echo "<pre>";
    var_dump($data);
    echo "<br>";
    $data -> info();
?>