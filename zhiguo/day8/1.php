<!-- 张志国 -->
<?php
	//抽象类 （为了对代码进行统一）
    abstract class statusMysql{
	//获取单条
	abstract protected function getOne($sql);

	//获取多条
	abstract protected function getAll($sql);

	//删除
	abstract protected function delete($sql);

	

}
class Mysql extends statusMysql{

	 public function getOne($sql){
		
		echo __MODEL__;
	 }
	 public function getAll($sql){
		
		echo __MODEL__;
	 }
	 public function delete($sql){
		
		echo __MODEL__;
	 }
}
$db=new Mysql;
var_dump($db);
?>
