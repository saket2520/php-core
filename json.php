<?php
class ArrayValue {
    public $array;
    private $m;

    public function __construct(array $array,int $m) {
        $this->array = $array;
        $this->m = $m;
    }
/**
    public function jsonSerialize() {
        return ['array'=>$this->array,"m"=>$this->m];
    }
 */

}

$array = [1, 2, 3];
//echo json_encode(new ArrayValue($array,65)).PHP_EOL;
$str = serialize(new ArrayValue($array,65));
echo "\n";
var_dump(unserialize($str));


