<?php  
class Man{
	public $name;

	public function __construct($user){
		// echo "构造方法(统称魔术方法),实例化对象是会自动调用";
		$this->name = $user;
	}
	
	public function say(){
		echo "Hi~".$this->name;
	}
	//主动销毁时 和 代码执行完毕后 自动触发
	// public function __destruct(){
	// 	echo "析构方法,";
	// }
}
//实例化
$m = new Man('lisi');
$m->say();

$a = new Man('zhangsan');
$a->say();



?>