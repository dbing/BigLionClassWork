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


	public function delete($sql){
		if(mysql_query($sql)){
			return mysql_affected_rows();
		}else{
			$this->error = mysql_error();
			return false;
		}
	}

	public function getrow($sql){
		    $res = mysql_query($sql);

		    if($res){
		    	return mysql_fetch_assoc($res);
    		}else{
    		    $this->error = mysql_error();
    			return false;
    		}

	}

	public function updata($sql){
		    $res = mysql_query($sql);

		    if($res){
		    	return mysql_affected_rows();
		    	
		    }else{
		    	return false;
		    }
	}

}




 ?>