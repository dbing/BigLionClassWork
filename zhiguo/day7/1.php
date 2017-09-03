<!-- 张志国 -->
<?php
//魔术方法
class Man{

public $name='牛牛';
protected $car='XXX';
private $money='好多钱';
public function __clone(){//克隆

 	echo '克隆';

}
public function __get($root){//可以在类外调用私有的，受保护的
	echo    $root;
	echo 	$this->$root;
}

public function __set($k,$y){ //进行修改本类的属性的值(设置一个不存在的或者权限不够的将会触发)

$this->$k=$y;
}

public function __isset($param){
	var_dump($param);
}
public function __unset($param){
	var_dump('执行了'.$param);
}
public function __call($k,$v){
	var_dump($k);
	var_dump($v);
}

public static function __callStatic($name, $arguments) 
{
	var_dump($name);
	var_dump($arguments);

   
}	
}
 $m=new Man();
// var_dump($m);
// echo '<br>';
// $new = clone $m;
// echo '<br>';
// var_dump($new);

// $m->zss='什么鬼';
// $m->money='10$';
// echo '<pre>';
// var_dump($m);


//isset($m->modey);
// unset($m->money);

 //$m->Demo();


// $m->getMoeny(1,'bing');

 // Man::getCat(1,'xxx','yyy');