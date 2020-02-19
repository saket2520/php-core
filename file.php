// Variable Variables

<?php

$var = "hello";

$hello = "here";

$$var = "there";

echo $hello; //Output - there

echo "\n";

echo $$var;  //Output - there

echo "\n";

/**
 * class A contains two public properties whose names are assigned as values to other variables outside the class scopei in the context of var * iable variables and then are accessed using those names.
 */



class A
{
    public $a=9;

    public static $s=90;

}

$z='s';

$m='a';

$ob=new A;

echo A::$$z;  // static property access syntax is ClassName::$propname

echo "\n";

echo $ob->$m;  // non-static property access syntax is instancename->propname



