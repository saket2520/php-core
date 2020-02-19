<?php 

class Test
{

    private static $x=10;

    private $b=8;
    
    public function check()
    { echo "\n".self::$x;
      echo "\n".$this->b;
    }

}

$cl1=static function(){return Test::$x;};
$cl2=function(){return $this->b;};

$bcl1=Closure::bind($cl1,null,'Test');
$bcl2=Closure::bind($cl2,new Test(),'Test');

(new Test)->check(); 
print "\n\n";
echo $bcl1();
echo PHP_EOL;
echo $bcl2();


?>

