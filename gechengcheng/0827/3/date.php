<?php
require "MySql.class.php";
$db = new Mysql;

$id = $_GET['id'];
$sql = "select * from user where id = '$id'";
$info = $db->date($sql);


?>

<form action="update.php" method="post">
    <table>
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="user" value="<?php echo $info['user'];?>"></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="pwd" value="<?php echo $info['pwd'];?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $info['id'];?>"></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
