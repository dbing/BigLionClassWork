<!-- 张志国 -->
<?php

include('MySql.class.php');

$db=new MySql;

$table='a';
$data=$db->select($table);

?>
<table>
	<tr>
		<td>name</td>
		<td>pwd</td>		
	</tr>
<?php foreach ($data as $key => $value) {?>
	<tr>
		<td><?= $value['name']?></td>
		<td><?= $value['pwd']?></td>
	</tr>
<?php }?>
	
</table>