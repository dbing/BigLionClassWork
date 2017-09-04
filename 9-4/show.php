<?php 
/*
 * Created by 
 * User : Zhao Yu
 * Hobby: 吃饭睡觉打豆豆
 */
  header("content-type:text/html;charset=utf-8");
  include("Shop.php");
  include("Mysql.class.php");
   $info = new Mysql;
   $are = $info ->select("user");//name like '%456%'
 ?>
 <table border="1">
 	<tr>
 		<td>name</td>
 		<td>pwd</td>
 	</tr>
 	<?php foreach ($are as $key => $value) {  ?>

 	<tr>
 		<td><?php echo $value['name'] ?></td>
 		<td><?php echo $value['pwd'] ?></td>
 		<td><a href="delete.php?id=<?php echo $value['id'] ?>">删除</a></td>
 		<td><a href="save.php?id=<?php echo $value['id'] ?>">修改</a></td>
 	</tr>
 	 	<?php } ?>
 </table>
