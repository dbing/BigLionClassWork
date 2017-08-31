<?php 
header("content-type:text/html;charset=utf-8"); 
class dog{	
		public $block;
		public $pink;
		public $white;
		public function white($res)
		{
			if($res!= $this->block && $res!= $this->pink && $res!= $this->white)
			{
				echo "狗在睡觉";die;
			}
			if($res == $this->block)
			{
				echo "狗的信息： ".$res." 白色"."19岁";
			}
			if($res == $this->pink)
			{
				echo "狗的信息： ".$res." 红色 "."20岁";
			}
			if($res == $this->white)
			{
			 echo "狗的信息： ".$res." 嘿色 "."21岁";	
			}
		}
		public function __construct($block,$pink,$white)
		{
			 $this->block = $block;
			 $this->pink = $pink;
			 $this->white = $white;
		}
}
   $data = new dog("小黑","粉粉","白");

 ?>