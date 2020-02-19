<?php

//Defining an array

/**
 * use array() language construct
 */
$arr1 = array(1,2,3);

/**
 * use square bracket method
 */
$arr2 = [4,5,6];

/*
 * using value assignment method on unindexed array variable
 */
$arr3[]=7;

$arr3[]=8;

print_r ($arr1);

echo "\n";

print_r ($arr2);

echo "\n";

print_r ($arr3);

echo "\n";

//define a constant

define("constant",1);

unset($arr);

$arr["constant"] = 45;
$arr[1] = 32;

echo $arr["constant"]."\n";// will access the value of key "constant" in $arr.

echo $arr[constant]."\n"; // will access the value of constant named constant.


