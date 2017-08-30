<?php 

class MySql{
    public $error;

    public function __construct(){
    	$conn = mysql_connect('127.0.0.1','root','root') or die(mysql_error());

		mysql_select_db("myblog") or die(mysql_error());

		mysql_query("set names utf8") or die(mysql_error());
    }

	public function insert($sql){
		return $res = mysql_query($sql);

	}

	public function getAll($sql){	
		$res = mysql_query($sql);
		if($res){
			while ($arr = mysql_fetch_assoc($res)) {
				$data[] = $arr;
			}
			return $data;
		}else{
			$this->error = mysql_error();
			return false;
		}
	}

}

    $db = new MySql;
	// $sql = "INSERT INTO demo (user,pwd) VALUES('xiaoxiao','123')";

	// $result = $db->insert($sql);
	// var_dump($result);
	// 
	$sql = "SELECT * FROM demo";
     echo '<pre>';
	$result = $db->getAll($sql);

	var_dump($result);

	



 ?>