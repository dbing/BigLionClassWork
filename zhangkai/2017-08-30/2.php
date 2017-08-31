<?php
/*name   KAI
 *
 * 对象的赋值    公用同一块内存空间
 * 对象的复制    开辟新的空间
 * */

class par
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

}

$cat  = new par('xiaokeai');
$dog = clone $cat;

$dog->name = 'weiwei';
echo $cat->name;