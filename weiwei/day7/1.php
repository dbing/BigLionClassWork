<?php 
/*
geng
 */
 header("content-type:text/html;charset=utf-8");
class Man
{
	public $name = 'xxx名';
	protected $car='xxx牌';
	private $money = 'xxx钱';

	public function __clone()
	{
		echo 'You clone me';
	}

	public function __get($argument)
	{
		echo '您在访问属性:'.$argument;
		echo '<br>';
		return $this->$argument;
	}

	public function __set($key,$value)
	{
		var_dump($key);
		var_dump($value);
		$this->$key = $value;
	}

	public function __isset($param)
	{
		var_dump($param);
	}

	public function __unset($param)
	{
		var_dump('running Unset() '.$param);
	}

	private function getDemo()
	{
		echo 'getDemo';
	}

	public function __call($key,$value)
	{
		var_dump($key);
		var_dump($value);
	}

    public static function __callStatic($name, $arguments) 
    {
    	var_dump($name);
    	var_dump($arguments);
    }	

}
?>