<?php
require "Mysql.class.php";

$db = new Mysql;

$id = $_GET['id'];

$sql = "select * from student where id = '$id'";

$res = $db ->get_row($sql);

?>
<form action="do_update.php" method="post">
<table border="1">
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user" value="<?php echo $res['user']?>"/></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name="pwd" value="<?php echo $res['pwd']?>"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="修改"/></td>
            <input type="hidden" name="id" value="<?php echo $res['id']?>"/>
        </tr>
</table>
</form>