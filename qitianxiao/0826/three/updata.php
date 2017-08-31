<?php 
    require "MySql.class.php";

    header("content-type:text/html;charset=utf-8;");

    $db = new MySql;
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM demo WHERE id = '$id'";
    $info = $db->getrow($sql);

    var_dump($info);
 ?>

 <form action="save.php" method="post">
 	<table border="1">
 		<tr>
 			<td>用户名</td>
 			<td><input type="text" name="user" value="<?php echo $info['user']; ?>"></td>
 		</tr>
 		<tr>
 			<td>密码</td>
 			<td><input type="password" name="pwd" value="<?php echo $info['pwd']; ?>"></td>
 		</tr>
 		<tr>
 			<td><input type="submit" value="修改"></td>
 			<td><input type="hidden" name="id" value="<?php echo $info['id'];  ?>"></td>
 		</tr>
 	</table>
 </form>