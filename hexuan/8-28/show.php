<?php 
header("content-type:text/html;charset=utf-8"); 
	include('config.php');
	$info = new Mysql;
	$sel = "select * from test";
	$data = $info->select($sel);
 ?>
 <table border="1">
 <tr>
 	<td>账号</td>
 	<td>密码</td>
 	<td>操作</td>
 </tr>
 	 <?php foreach ($data as $key => $value) { ?>
	   <tr>
	   	<td><?php echo $value['name'] ?></td>
	   	<td><?php echo $value['pwd'] ?></td>
	   	<td><a href="delete.php?id=<?php echo $value['id'] ?>">删除</a></td>
	   	<td><a href="update.php?id=<?php echo $value['id'] ?>">修改</a></td>
	   </tr>
	  <?php } ?>
</table>