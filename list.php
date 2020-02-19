<?php

/**
 * list is a language construct like array()
 * it is used to assign a list of variable as if they were an array in a single operation
 */

$info = array("Saket", "Computer Science", 1502910128);

list($name, $dept, $roll_num) = $info;

echo "$name is in $dept department with roll number $roll_num."."\n";


/**
 * keyed and unkeyed values cannot be mixed in an array to be assigned to list of variables.
 */


$description = array(1,2,3,4,"name"=>"Saket");

/**
 * list($a,$b,$c,$d,"name"=>$data) = $description;
 * will throw error:
 * cannot mix keyed and unkeyed array entries for assignment.
 */

/**
 * correct way
 */
list($a,$b,$c,$d)=$description;

echo "$a"."\n";
echo "$b"."\n";
echo $c."\n";
echo $d."\n\n";

/**
 * correct way
 */
list("name"=>$data) = $description;

echo $data."\n";

/**
 * multi-dimensional arrays can be iterated using the list construct
 */

$arr =[ [1,2], [3,4], [5,6], [7,8]];
$i=1;
foreach($arr as list($a, $b))
{
    echo "layer $i: $a, $b \n";
    $i++;
}



