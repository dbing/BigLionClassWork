<?php 
/*
	 name:Zhao Yu
	 hobby:吃喝玩乐

 */
    class Man{

    		public $name="666";//公共的
    		protected $sex = "20";//受保护的
    		private $user="888";//私有的
    		public function Name()
    		{
    			return $this->name;
    		}
    		public function Sex()
    		{
    			return $this->sex;
    		}
    		public function User()
    		{
    			return $this->user;
    		}

    }
    //$info = new Man;
    //只有公共的才能被访问
    //echo $info->name;
    //echo $info->sex;
    class Sonman extends Man
    {
    	public function bay()
    	{
    		return $this->sex;//父类受保护的
    	}
    	public function add()
    	{
    	  return $this->user;//父类私有的
    	}
    }
    $info = new Sonman;
    echo $info->name;
    echo "<br>";
    echo $info->Sex();//受保护的放在父类中的公共的方法里面 可以在子类中调用查看 只读权限
    echo "<br>";
    echo $info->User();//私有的同上
    echo $info->bay();//子类中 可以使用公共的继承父类中受保护的
    echo $info->add();//不能继承父类中私有的  子看不了父的隐私
 ?>
