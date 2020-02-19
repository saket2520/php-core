<?php

/**
 * All functions,classes in php have global scope
 * functions that are defined inside other functions can be
 * called in global context.
 */

// for calling the inner function its definition must be processed prior to its call.
function outer()
{
    echo "Hey I am the ".__FUNCTION__." function"."\n";
 // can be accessed globally.
    function inner()
    {
        echo "Hey i am ".__FUNCTION__." inside the outer function "."\n";

    }
}

outer();

inner();

echo __FILE__."\n";
/**
 * function names must be constructed in standard way
 * it consists of words separated be underscore describing the
 * action of the function
 */

