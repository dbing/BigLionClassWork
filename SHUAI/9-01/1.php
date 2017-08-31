<?php
/**
 * User    : SHUAI
 * Email   : 953436658@qq.com
 * Referral: This is from a very handsome guy
 * control : $param
 * content : $魔术方法的使用
 * Date    : 2017/8/30 0030
 * Time    : 21:48
 */
class Min{
    public $name = '帅';
    protected  $car = '111111';
    private $monery = '22222';

    /**
     * clone
     * 克隆
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
        echo '33333';
    }
    /**
     * get
     *读取不可访问属性的值时，__get() 会被调用。
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        // TODO: Implement __get() method.
        echo '4444'.$name;
        echo '<br>';
        return $this->$name;
    }
    /**
     * set
     * 在给不可访问属性赋值时，__set() 会被调用。
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        // TODO: Implement __set() method.
        $this->key = $value;

    }
    /**
     * isset
     * 当对不可访问属性调用 isset() 或 empty() 时，__isset() 会被调用。
     * @param $name
     */
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
         var_dump($name);
    }
    /**
     * unset
     * 当对不可访问属性调用 unset() 时，__unset() 会被调用。
     * @param $name
     */
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
        var_dump('jishuaifei'.$name);
    }
    private function getDemo()
    {
        echo '123332';
    }

    /**
     * __call
     * 在对象中调用一个不可访问方法时，__call() 会被调用。
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        var_dump($name);
        var_dump($arguments);
    }

    /**
     *  static
     *  __callStatic
     * 在静态上下文中调用一个不可访问方法时，__callStatic() 会被调用。
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name);
        var_dump($arguments);
    }
}
//$m1 = new Min;
//__clone
//$m2 = clone $m1;
//$m1->car = '6666';

//__isset
//var_dump($m1->monery);

//__get
//echo $m1->car;

//__set
//$m1->xry = '7777';
//var_dump($m1);

//__unset
//isset($m1->monery);

//__unset
//unset($m1->monery);

//__call
//$m1->getDemo(2,'23232');

//__callStatic
Min::get(2,'ji','shuai');
?>