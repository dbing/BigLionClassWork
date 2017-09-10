<?php 
/**
 * Created by 
 * User : Zhao Yu
 * @param 接口类
 */
  interface Shop
  {
	  	 public function getOne($table,$data);
	  	 public function select($table,$data);
	  	 public function save($table,$data);
	  	 public function delete($table,$data);
	  	 public function add($table,$data);
	  	 
  }



 ?>