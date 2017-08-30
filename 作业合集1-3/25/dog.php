<?php 
header("content-type:text/html;charset=utf-8"); 
class cat{	
		public $bai;
		public $red;
		public $hei;
		public function white($res)
		{
			if($res!= $this->bai && $res!= $this->red && $res!= $this->hei)
			{
				echo "该猫正在捉老鼠";die;
			}
			if($res == $this->bai)
			{
				echo "该猫为 ".$res." 白色"."19岁";
			}
			if($res == $this->red)
			{
				echo "该猫为 ".$res." 红色 "."20岁";
			}
			if($res == $this->hei)
			{
			 echo "该猫为 ".$res." 嘿色 "."21岁";	
			}
		}
		public function __construct($bai,$red,$hei)
		{
			 $this->bai = $bai;
			 $this->red = $red;
			 $this->hei = $hei;
		}
}
   $data = new cat("小白","小红","小嘿");
   $data->white("aaa");

 ?>