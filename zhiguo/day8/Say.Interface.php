<!-- 张志国 -->
<?php 
//增 删 修 查（单，多，单个字段） 
interface Say
{

	public function add($table,$data);


	public function delete($table,$where);


	public function save($table,$where);


	public function find($table,$where=1);


	public function select($table,$where=1);


	public function getField($table,$column,$where=1);
	
}

?>