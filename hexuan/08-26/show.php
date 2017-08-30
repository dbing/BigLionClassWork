<?php 
header("content-type:text/html;charset=utf-8"); 
	include('config.php');
	$new = new Mysql;
	$sql = "select * from test";
	$data = $new->select($sql);
 ?>
 <table border="1">
 	 <?php foreach ($data as $key => $value) { ?>
	   <tr>
	   	<td><?php echo $value['name'] ?></td>
	   	<td><?php echo $value['pwd'] ?></td>
	   </tr>
	  <?php } ?>
</table>