<?php 
header("content-type:text/html;charset=utf-8"); 
	include('Mysql.class.php');
	$info = new Mysql;
	$sel = "select * from test";
	$data = $info->select($sel);
 ?>
 <table border="1">
 	 <?php foreach ($data as $key => $value) { ?>
	   <tr>
	   	<td><?php echo $value['name'] ?></td>
	   	<td><?php echo $value['pwd'] ?></td>
	   </tr>
	  <?php } ?>
</table>