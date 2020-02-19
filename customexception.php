<?php


class Arithmetic 
{
    public $x;

    public function __construct($x=0)
    {
        $this->x = $x;
    }

    public function calc()
    {
        if($this->x == 0)

          throw new ArithmeticError("Divide By Zero Error is thrown.The divisor must be any real number except 0.Handle this carefully");

        else
            return 4/($this->x);

    }

}

$o = new Arithmetic();

try
{
    $o->calc();
}
catch(Error $ex)
{
   echo $ex->getMessage();
}





