<?php

class Mysql{

	function __construct(){

		@mysql_connect('127.0.0.1','root','');
		mysql_select_db('2017') or die(mysql_error());
		mysql_query('set names utf8');

	}
	function add($name,$pwd){
		$res= "insert into a values(NULL,'$name','$pwd')";
		$dosql=mysql_query($res);
		$num="select * from a";
		$dosql=mysql_query($num);
		$list=array();
		
		if($dosql){
			while($row=mysql_fetch_assoc($dosql)){
				$list[]=$row;
			}
			return $list;
		}
	}


}
$sql=new Mysql;
$numSql=$sql->add('张三','666');
if($numSql){
	echo 'ok';
}else{
	echo $sql->error();
}
?>
<table>
	<tr>
		<td>id</td>
		<td>name</td>
	</tr>
	<?php foreach ($numSql as $key => $value) {?>
	
	
	<tr>
		<td><?php echo $value['id']?></td>
		<td><?php echo $value['name']?></td>
	</tr>

	<?php }?>
</table>
