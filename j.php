<?php

//Normalizing the array to simple key-value pairs
$arr = [0=>["fname"=>"Saket", "lname"=>"Bhatnagar", "city"=>"Hyd"],
1=>["dept"=>"SD", "pin"=>246149, "lname"=>"Bhatnagar"],
2=>["pin"=>246149,""=>"", ""=>""],
    ];

$un = [];

$start = microtime(TRUE);

for($i = 0;$i < count($arr)-1; $i++)
{
    $un = $arr[$i] + $arr[$i+1];
}


class Person implements JsonSerializable{

    private $fname;

    private $lname;

    private $city;

    private $dept;

    private $pin;

    public function __construct($fname, $lname, $city, $dept, $pin)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->city = $city;
        $this->dept = $dept;
        $this->pin = $pin;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

}

$person = new Person("Saket", "Bhatnagar", "Hyd", "SD", 246149);

$personarr = json_decode(json_encode($person),true);


var_dump(array_intersect($ar,$arr));
foreach($arr as $ar)
{

   /*
    if(array_intersect($ar,$arr) == $ar)
       {
           echo "the person should be in the ban list";
           break;
    }
    */
}



/**
if($un == json_decode(json_encode($person),true))
    echo "they are same"."\n";
else
    echo "they are not equal"."\n";

$end = microtime(TRUE);

echo "The code took " . ($end - $start) . " seconds to complete.";

 */
