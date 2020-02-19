<?php

/**
 * defining constants using define() construct
 * constant names are case-sensitive
 * as of php 7, define() can be used to define scalar type constants
 * and an array constant as well
 */

define("dept", 4);

define("COMPANY", 5.68e-2);

define("isTrue",true);

define("unknown", NULL);

define ("arrays", array(1,2,3,4));
echo "Printing constants defined using define() construct of php:"."\n";
echo "dept = ".dept;
echo "\n";
echo "Company = ".COMPANY;
echo "\n";
echo "istrue = ".isTrue;
echo "\nunknown = ";
var_dump(unknown);
echo "\narrays = ";
print_r(arrays);
echo "\n";

/**
  * defining constants using the const keyword assignment method
 */

echo "Printing constants defined using const keyword of php:"."\n";
const dept2 = 4;
const COMPANY2 = 5.68e-2;
const istrue2 = true;
const arrays2 = [1,2,3,4];
echo "dept2 = ".dept2."\n";
echo "Company2 = ".COMPANY2."\n";
echo "istrue2 = ".istrue2."\n";
echo "arrays2 = ";
print_r(arrays2)."\n";

/**
 * const and define have a difference
 * constants defined using the const keyword must be defined at the top level scope
 * as they are defined at the compile time and hence cannot be defined inside loops,functions,if statements,
 * try-catch block.
 */


