<?php
class parentClass {
    private $str = 'This is private field';
    public $str2 = "This is Public field";
    protected $str3 = "This is Protected field";

    public function getPrivateStr() {
        return $this->str;
    }
}

class childClass extends parentClass {
    public function getProtectedStr3() {
        return $this->str3;
    }
}

$obj = new childClass();
echo $obj->str2 . "<br>";  // Accessing public property from child class instance - accessible
echo $obj->getProtectedStr3() . "<br>";  // Accessing protected property from child class instance - accessible

$obj1 = new parentClass();
// echo $obj1->str;  // Trying to access private property from parent class instance - not accessible
echo $obj1->getPrivateStr();  // Accessing private property using method from parent class instance - accessible
?>
