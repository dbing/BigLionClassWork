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
   $are = $info ->getOne("user",$_GET);
 ?>
 <form action="update.php" method="post">
 <table>
 <input type="hidden" value="<?php echo $are['id'] ?>" name="id">
	  		<tr>
	  			<td>name</td>
	  			<td><input type="text" value='<?php echo $are['name'] ?>' name="name"></td>
	  		</tr>
	  		<tr>
	  			<td>pwd</td>
	  			<td><input type="password" value='<?php echo $are['pwd'] ?>' name="pwd"></td>
	  		</tr>
	  		<tr>
	  			<td><input type="submit" value="修改"></td>
	  			<td></td>
	  		</tr>
	  	</table></form>