<?php
class demo
{
    public $name = 'demo';
    const pi = 3.1415926;
    public function get()
    {

        echo self::pi;
    }
}
    echo Demo::pi;
?>