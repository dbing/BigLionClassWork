<?php
class Demo
{
    public $name = 'demo';
    const pi = 3.1415926;
    public function getPi()
    {
        echo self::pi;
    }
}
echo Demo::pi;
