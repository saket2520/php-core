<?php

/*
 * closure is also known as anonymous functions
 */

$name = "Saket Bhatnagar";
$closure = function($arg) use($name){return $name.$arg;};

echo $closure(" works in Valuelabs.");

/**
 * Parent scope of a closure is necessarily the function where it is defined and not the function 
 * from where it is called
 */
function check($argument)
{
    $param = 30;

    $callback = function($arg) use($param,$argument){ echo "\n".($arg + $param + $argument);};

    call_user_func($callback,30);

}

check(70);
echo "\n";
/**
 * callable is a typehint used to type any user defined or predefine functions.
 * can be called using call_user_func(), call_user_func_array() functions.
 * a callable is passed using an array containing the object variable as the first element and method name as the second element for
 * methods inside class.
 * for a non-class function,simple pass the method name.
 * for static class functions,pass the array with the className and the static method name.
 */

class A
{
   public $a;

   public function setter($arg)
   {
       $this->a = $arg;
       echo "I am a method setter() inside ".__CLASS__.".\n";
   }

}

function setter()
{
    echo "I am a non-class function setter()."."\n";
}

$ob = new A;
call_user_func("setter");
call_user_func([$ob, "setter"],5);

















