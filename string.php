<?php

/** String data type
 */

/**
 * heredoc syntax
 * equivalent to double quoted strings
 */

$heredoc = <<<'LABEL'
Hey I am the heredoc syntax feature.I am equivalent to double quoted strings in php.
LABEL;

echo $heredoc."\n";

$nowdoc = <<<'start'
Hey I am the nowdoc syntax feature.I am equivalent to single quoted strings in php.
start;

echo $nowdoc."\n";

/*
 * Double quoted strings.
 * php variables,array values,object properties(not constants),escape sequences are expanded inside strings with double quotes
 */

$array = array(0,5,"a");

class A
{
    public $prop1 ="working";

    public const CONSTANT = 45;

    public function getName()
    {
        return "prop1";
    }
}

/**
 * Declaration of variable is possible in php
 */
$ob;
$variable;

$ob = new A();
$variable = "a handsome boy";

echo "Value of array at index 1 is $array[1]"."\n";
echo "value of class property/member prop1 is $ob->prop1"."\n";
echo "Saket Bhatnagar is $variable"."\n";

// Does not expand class constants
echo "The value of class constant is $ob->CONSTANT"."\n"; // o/p- The value of class constant is


/**
 * A string in php is implemented as an array of bytes
 */

$string = "Saket";

$working = "Working fine";
for ($i = 0 ; $i < strlen($string); $i++)
{
    echo $string[$i];
}

echo "\n";

/*negative indices are usable to count from the end of the string.
 * count starts from -1
 */
for ($i = 1; $i <= strlen($string); $i++)
{
    echo $string[-$i];
}

echo "\n";

function getName()
{
    return "prop1";
}

$prop1 = "Working";

echo "the return value of function getName is getName()"."\n";


// won't work and will throw error as A::getname() doen not exist
echo "Using simple syntax for expanding class method return value: $ob->getName()"."\n";

/*
 * a php function (not class method) can be evaluated using complex syntax
 * but the complex syntax must be used only in object property , variable and array value context.
 */
echo "Using the object context {$ob->{getName()}}"."\n";

echo "Using the variable context: {${$ob->getName()}}"."\n";

echo "Using variable context with Object->property context: {${$ob->{$ob->getName()}}}"."\n";

echo "Using object Context with variable context: {$ob->{$ob->getName()}}"."\n";

/*
 * Conversion to strings
 */

// arrays are always converted to a string "Array"
// echo and print cannot show the contents of an array

$arr = [1,2,3,4];

echo (string)$arr;

echo "\n";

$arr = ['a', 'b', 'c'];

function calc($v)
{
    return $v;
}

//complex syntax in array[value] context does not yield anything
echo "Using array context:".$arr[calc(0)]."\n";
