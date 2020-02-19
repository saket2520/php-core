<?php

namespace N1\N2;

const namely = "Saket";

function foo()
{
    echo "Hey I am foo() of namespace ". __namespace__."\n";
}

class A
{
    const a =4;

    function B()
    {

        echo "Hey I am B() of class A INSIDE NAMESPACE ".__namespace__."\n";

    }
}

echo "HEY I AM NAMESPACE ".__namespace__."\n";

class B
{
    function __construct()
    {
        echo __METHOD__."\n";
    }
}

/**
 * Dynamic accessing of elements.
 * require fully qualified className to be supplied.
 * since there is no difference between a qualified and fully qualified classname in dynamic ClassName,
 * leading backslash is not necessary
 */

$n = "N1\\N2\\B";

$ob = new $n;

foo(); //non dynamic access

$name = "N1\\N2\\foo"; // dynamic class access.

$name();

/**
 * __NAMESPACE__ magic constant is used for dynamic name construction.
 * it evaluates to a string containing the current namespace name.
 */


function construct($classname)
{
    echo __NAMESPACE__."\\".$classname."\n";
}

construct("namespaces");

construct("Outer\\Inner\\A");


/**
 * namespace keyword is the self equivalent operator of classes
 */

namespace\construct("class1");

namespace\construct("class2");



