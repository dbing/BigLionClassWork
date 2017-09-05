<?php 
abstract class AbstractHuman
{
	abstract private head();
	abstract private body();
	abstract private leg();
	abstract private foot();
}
class man extends AbstractHuman
{	
}
?>