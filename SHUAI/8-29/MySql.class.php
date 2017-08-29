<?php
error_reporting(E_ALL ^E_DEPRECATED);
class MySql
{
    public function __construct()
    {
    		//连接mysql
		$con = mysql_connect('localhost:3306','root','');
		if(!$con){
			die(mysql_error());
		}
		//选库
		mysql_select_db('gooe') or die(mysql_error());

		//设置字符
		mysql_query('set names utf8') or die(mysql_error());
    }

	//增加
	public function insert($sql)
	{
	
		return $res = mysql_query($sql);
	 }
	 //查询
	  public function get($sql)
	  {
          $res = mysql_query($sql);
          if($res)
		{
			$list = array();
			while($row = mysql_fetch_assoc($res))
			{
				$list[] = $row;
			}
			return $list;
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}
	  }
	  //删除
	  public function delete($sql)
	  {
	  	if(mysql_query($sql)){
	  		return mysql_affected_rows();
	  	}else{

	  		$this->error = mysql_error();
	  		return false;
	  	}
	  }
	//修改
		public function update($sql)
	{
		$bool = mysql_query($sql);
		if($bool)
		{
			return mysql_affected_rows();
		}
		else
		{
			$this->error = mysql_error();
			return false;
		}		
	}
		public function getRow($sql)
	{
		$result = mysql_query($sql);
		if($result)
		{
			return mysql_fetch_assoc($result);
		}		
		else
		{
			$this->error = mysql_error();
			return false;
		}
	}

	}
$db = new MySql;
$sql = "SELECT * FROM cai";
$list = $db->getAll($sql);
if(!$list)
{
	die($db->error);
}



// $sql =  "INSERT INTO cai (name,url) VALUSE ('san','12')";
//  $res = $db->insert($sql);
// var_dump($res);
?>


<table border="1">
	<?php foreach($list as $v){ ?>
	<tr>
		<td><?php echo $v['name'];?></td>
		<td><?php echo $v['url'];?></td>
		<td><a href="delete.php?id=<?php echo $v['id'];?>">删除</a></td>
		<td><a href="update.php?id=<?php echo $v['id'];?>">修改</a></td>
	</tr>
	<?php } ?>
</table>

