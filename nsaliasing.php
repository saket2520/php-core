<?php

/**
 * We can import classes,functions and namespaces using their fully-qualified names
 * following the use operator.
 * We can alias them using the 'as' keyword.
 */
namespace N1;

include "namespace.php";

use N1\N2\A;

$ob = new A();

$ob->B();

