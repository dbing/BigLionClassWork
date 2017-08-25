<?php
/*
 *  金字塔
 *
 * */
    class four
    {
        public $number;
        public function __construct($number)
        {
            $this -> number = $number;
        }

        public function info()
        {
            echo "<center>";
            for($i = 1;$i<=$this -> number;$i++)
            {
                echo str_repeat('6',($i * 2) -1);
                echo "<br>";
            }
        }
    }
    $bb = new four(66);
    $bb ->info();
?>