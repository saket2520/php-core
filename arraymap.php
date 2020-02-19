<?php

$arr = array(1,2,3,4,8,9);

$arr2 = ["one" => 1, "two" => 2, "three" => 3,5,8,15];

$arr3 = array("a" => 1, "b" => 2, "c" => 3,8,19,50);

//var_dump(array_map(function($ele){return $ele * 3;},$arr));

print_r(array_map(function($a,$b,$c){return $a+$b+$c;},$arr,$arr2,$arr3));

//echo "\n",(1+null);
