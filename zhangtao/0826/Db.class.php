<?php
error_reporting(E_ALL ^E_DEPRECATED);
header("content-type:text/html;charset=utf-8");
// 封装方法
class Db {
	public function __construct(){
		mysql_connect('127.0.0.1:3306', 'root', 'root');
		mysql_select_db('seven');
		mysql_query('set names utf8');
	}
	//添加
	public function add($sql){
		return mysql_query($sql);
	}
	//查询
	public function select($sql){
		$result = mysql_query($sql); //资源
		$data = [];
		while($row = mysql_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
}
$db = new Db;
// $sql = "insert into user (username,userpwd) value('张三','123456')";
// $res = $db->add($sql);

$sql = 'select * from user';
$res = $db->select($sql);
?>

<center>
	<table border="1">
	<?php foreach($res as $v){ ?>
		<tr>
			<td><?= $v['username']?></td>
			<td><?= $v['userpwd']?></td>
		</tr>
	<?php } ?>
	</table>
</center>