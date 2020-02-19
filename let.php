<?php

/*
echo $a =( "" == true);

echo $b = ("0" == true);

echo $c = ("0" == false);

 */

$a =( "abc123" == (string)0 );

$b = ("0" == true);

$c = ("0" == false);

var_dump($a,$b,$c);

