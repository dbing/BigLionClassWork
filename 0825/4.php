<?php
header("content-type:text/html;charset=utf-8");

class Cat{
	public $name;
	public $age;
	public $color;
	public function __construct($name, $age, $color){
		$this->name = $name;
		$this->age = $age;
		$this->color = $color;
	}
	public function getCat(){
		if($this->name != "小白" && $this->name != '小花'){
			echo '您没有名为'.$this->name.'的小猫咪';
		}else{
			echo '名字：'.$this->name. "<br />";
			echo '年龄：'.$this->age. "<br />";
			echo '颜色：'.$this->color. "<br />";
			echo '<hr>';
		}
		
	}
}

$cat = new Cat('小白', '3', '白色');
echo $cat->getCat();

$cat1 = new Cat('小花', '100', '花色');
echo $cat1->getCat();

$cat2 = new Cat('小黑', '100', '花色');
echo $cat2->getCat();