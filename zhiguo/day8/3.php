<!-- 张志国 -->
<?php

interface  interfaceHead{
	
	public function head();
	
}
interface  interfaceHand{
	
	public function hand();
	
}
interface  interfaceBody{

	public function body();
	
}
interface  interfaceFoot{
	
	public function foot();
}

class Man implements interfaceHead,interfaceHand,interfaceBody,interfaceFoot
{
	public function head()
	{

	}
	public function hand()
	{

	}
	public function body()
	{

	}
	public function foot()
	{

	}
}
class Women implements interfaceHead,interfaceHand
{
	public function head()
	{

	}
	public function hand()
	{
		
	}


}



$m=new man; 
var_dump($m);
$w=new women;
var_dump($w);