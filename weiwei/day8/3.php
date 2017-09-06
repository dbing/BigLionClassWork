<?php 
// 关键词 interface 
// 接口中方法要公开
interface InterfaceHumanHead
{
	public function eye();
	public function nose();
}

interface InterfaceHumanBody
{
	public function arm();
}

interface InterfaceHumanFoot
{
	public function foot();
}


class Man implements InterfaceHumanHead,InterfaceHumanBody,InterfaceHumanFoot
{
	public function eye(){}
	public function nose(){}
	public function arm(){}
	public function foot(){}
}

class DisableMan implements InterfaceHumanHead,InterfaceHumanBody
{
	public function eye(){}
	public function nose(){}
	public function arm(){}
}
$m = new Man;
var_dump($m);
$dman = new DisableMan;
var_dump($dman);
?>