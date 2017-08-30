<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $多文件上传
 * Date    : 2017/8/30 0030
 * Time    : 19:58
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件上传</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>图片</td>
            <td><input type="file" name="img[]"></td>
        </tr>
        <tr>
            <td>图片</td>
            <td><input type="file" name="img[]"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="上传"></td>
        </tr>
    </table>
</form>
</body>
</html>
