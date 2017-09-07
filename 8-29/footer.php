<?php 

    class footer
    {

    		public $color="block";
    		protected $sex = "20";
    		private $user="小";

    		public function color(
    		{
    			return $this->color;
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
    //echo $info->sex;
    class Sonman extends footer
    {
    	public function bay()
    	{
    		return $this->sex;
    	}

    }
    $info = new Sonfooter;
    echo $info->color;
    echo $info->Sex();
    echo $info->User();
    echo $info->bay();
 ?>
