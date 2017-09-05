<?php 
abstract class abstractMysql{

	abstract protected function getOne($sql);

	abstract  protected function getAll($sql);

	abstract  protected  function delete($sql);
}

class Mysql extends  abstractMysql
{
	public function getOne($sql)
	{
		echo __METHOD__;
	}
	public function getAll($sql)
	{
		echo __METHOD__;
	}
	public function delete($sql)
	{
		var_dump($sql);
		echo __METHOD__;
	}
}

$db = new Mysql;
var_dump($db);
$db->delete('sql');
?>