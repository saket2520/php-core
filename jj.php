<?php


spl_autoload_register(function($name){


class A
{
    public $a = 9;

    public $m;

    private $l;

    private static $s = 90;

    public function __construct(Object $ob)
    {
        $this->l=78;
        $this->m = $ob;
    }

    public function __invoke($a)
    {
        return $a*$this->a+2;

    }

    public function __clone()
    {
        $this->m=new stdclass;
    }

    public function __get($name)
    {
        return $this->$name;
    }


    public function __set($name,$value)
    {
        throw new Exception("Cannot be Created");

    }

}

$ob = new A(new stdclass);

$obc = clone $ob;

//echo A::$s;

echo "\n".$ob->l;

echo PHP_EOL;
//var_dump(get_class_methods('Exception'));//
ReflectionClass::export("ReflectionClass");
//var_dump($obc->m == $ob->m);
