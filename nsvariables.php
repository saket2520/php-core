<?php
/**
 * variables are unaffected by namespace
 * they have global scope
 */
namespace A\C{

$var = 9;

const A = 56;

}

namespace B{

echo $var."\n";

//echo A; this statement is errorneous ,i.e, use of undefined constant A.
const z = "Saket";

$var = 10;

}


namespace A{

echo $var."\n";

echo C\A."\n";

echo \B\z."\n";
}
