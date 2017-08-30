<?php header("content-type:text/html;charset=utf-8"); 
include("Mysql.class.php");
$info = new Mysql;
$id = $_GET['id'];
$select ="select * from test where id = $id";
$data = $info->getsel($select);
 ?>
<table border="1">
		
		 <form action="show_update.php" method="post">
		 <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		 	<tr>
		 		<td>账号</td>
		 		<td><input type="text" name="name" value="<?php echo $data['name'] ?>"></td>
		 	</tr>
		 	<tr>
		 		<td>密码</td>
		 		<td><input type="text" name="pwd" value="<?php echo $data['pwd'] ?>"></td>
		 	</tr>
		 	<tr>
		 		<td><input type="submit" value="修改"></td>
		 	</tr>
		 </form>

</table>
