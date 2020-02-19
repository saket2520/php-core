<?php


function add($var1, $var2)
{
    echo "Hey the backtrace generated is as:"."\n";
    var_dump(debug_backtrace());
}

class Super{

    public $a;

    public const ONE = 1;

    public function adder()
    {
        //add(5,5);
        echo __CLASS__;
        echo "\n";
        echo get_Class();
        echo "\n";
        echo __METHOD__;
        echo "\n";
        echo __FUNCTION__;
        echo "\n";
    }

}

class Child extends Super
{
    public $c;

    public const ONE = 2;
}

$ob = new Child();
(new Super)->adder();
echo Child::ONE;
echo "\n";
echo SUPER::ONE;
echo "\n";

