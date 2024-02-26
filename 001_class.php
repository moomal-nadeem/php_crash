<?php
class Calculation {
    public $a, $b, $sum, $sub;

    function sum() {
        $this->sum = $this->a + $this->b;
        return $this->sum;
    }
    
    function sub() {
        $this->sub = $this->a - $this->b;
        return $this->sub;
    }
}

$obj1 = new Calculation();
$obj1->a = 5;
$obj1->b = 10;
echo "Sum of obj1: " . $obj1->sum() . "<br>";

$obj2 = new Calculation();
$obj2->a = 5;
$obj2->b = 10;
echo "Subtraction of obj2: " . $obj2->sub();
?>
