<?php

class Traverse implements Iterator
{
    private $m;

    protected $h;

    public $a;

    public $c;

    /**
     * construct
     *
     * @param String $m
     * @param int $h
     * @param Array $a
     * @param float $c
     */
    public function __construct($m,$h,$a,$c)
    {
        $this->m = $m;

        $this->h = $h;

        $this->a = $a;

        $this->c = $c;

    }

    /**
     * maintains the position of the iterator
     */
    public $position=0;

    /**
     * contains names of the properties to be iterated over
     */
    public $arr=["m", "h", "a", "c"];

    /**
     * sets the position of the iterator to initial
     */
    public function rewind()
    {
        //var_dump(__METHOD__);
        $this->position=0;
    }

    /**
     * checks the validity(existence) of a position
     */
    public function valid()
    {
        //var_dump(__METHOD__);
        return isset($this->arr[$this->position]) ;
    }


    /**
     * returns the current property value
     */
    public function current()
    {
        //var_dump(__METHOD__);
        $temp=$this->arr[$this->position];
        return $this->$temp;

    }


    /**
     * updates the position to the next
     */
    public function next()
    {
        //var_dump(__METHOD__);
         $this->position++;
    }


    /**
     * returns the name of the current property
     */
    public function key()
    {
        //var_dump(__METHOD__);
    }

}

$iter = new Traverse("Saket",23,array("a"=>1, "b"=>2, 56,"byebye"),78.9);
foreach($iter as $key=>$value)
{    var_dump($value);
    echo "\n";

}







