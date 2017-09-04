<?php
//关键字 interface
//接口中方法要公开
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

class Man implements InterfaceHuman,InterfaceHumanBody,InterfaceHumanFoot
{
    public function eye(){}
    public function nose(){}
    public function arm(){}
    public function foot(){}
}

class DisableMan implements InterfaceHumanBody,InterfaceHumanFoot
{
    public function eye(){}
    public function nose(){}
    public function arm(){}
}
$m = new Man;
var_dump($m);

$da = new  DisableMan;
var_dump($da);