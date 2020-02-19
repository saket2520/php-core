<?php
include 'gl.php';
/**
 * global space function 
 * checks the scope of function_exists()
 *
 * @param int $arg
 */
function gspace($arg)
{
    return $arg;

}

var_dump(function_exists('gspace'));
var_dump(function_exists('lspace'));
var_dump(function_exists('Local\lspace'));


