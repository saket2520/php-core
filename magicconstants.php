<?php

namespace Magic;
/**
 * Magic constants are a feature provided by php that evaluates to different values depending upon where they are used
 * all the names in php starting with __ are reserved to be magic constant names.They cannot be used to name normal 
 * identifiers.
 */

class B
{
    use check;

    public function print()
    {
        echo "My method name is ".__METHOD__."\n";
        echo "My function name is ".__FUNCTION__."\n";
        echo __CLASS__."\n";
    }
}

trait check
{
    public function printIt()
    {
        echo "My trait method name is ".__METHOD__."\n";
        echo "My trait function name is ".__FUNCTION__."\n";
    }

    public function printTrait()
    {
        echo "My trait name is ".__TRAIT__."\n";
    }
}


$ob = new  B;

// prints the complete path of the current working directory
echo "Current working directoy: ".__DIR__."\n";

// prints the complete path and filename of the current file
echo "Current complete filepath: ".__FILE__."\n";

//prints the current namespace
echo "Current namespace: ".__NAMESPACE__."\n";

/**
 * __METHOD__ - prints the method name
 * __CLASS__ - prints the method name of the class
 * __FUNCTION__- prints the function name inside or outside the class
 */

$ob->print();

/**
 * __TRAIT__ prints the traitname of the method.
 */

$ob->printTrait();


$ob->printIt();


