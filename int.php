<?php

/* integer division operator in php does not exist.integers divided using '/' operator would result in float if not divisible completely.*/
var_dump(4/5);

/* If integers are completely divisible, the result would be an integer*/
var_dump(4/2);

/**
 * Feature of php 7.0.0
 * intdiv(int dividend,int divisior):int;
 */
echo "\n",intdiv(9,5)."\n";

/**
 * Conversion of integers to other types
 * use (int) or (integer) typecasts
 */

var_dump((int)8.9);

/**
 * Conversion to integers
 */

// true converts to 1.
echo (int)true."\n"; // o/p- 1

// false converts to 0.
echo (int)false."\n"; // o/p- 0

// a string starting with an alphabet converts to 0
echo (int)"saket"."\n"; // o/p- 0

// a string starting with a valid integer converts to that integer value.
echo (int)"123e4"."\n"; // o/p- 1230000

echo (int)"123saket"."\n"; // o/p- 123

//float value will be rounded towards 0.
echo (int)76.4."\n"; // o/p- 76

//NULL will always be converted/evaluated to 0.
(int)NULL; // o/p- 0






